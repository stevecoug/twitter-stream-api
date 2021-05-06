<?php

namespace RWC\Phirehose;

abstract class OauthPhirehose extends Phirehose
{
    protected string $consumerKey;
    protected string $consumerSecret;

    public function setConsumerDetails(string $consumerKey, string $consumerSecret): OauthPhirehose
    {
        $this->consumerKey    = $consumerKey;
        $this->consumerSecret = $consumerSecret;

        return $this;
    }

    protected function getAuthorizationHeader(string $url, array $requestParams): string
    {
        $params       = $this->prepareParameters('POST', $url, $requestParams);
        $oauthHeaders = $params['oauth'];

        $oauth = 'OAuth realm="",';
        foreach ($oauthHeaders as $name => $value) {
            $oauth .= "{$name}=\"{$value}\",";
        }

        return substr($oauth, 0, -1);
    }

    protected function prepareParameters(string $method, string $url, array $params): array
    {
        $oauth = [
            'oauth_consumer_key'     => $this->consumerKey,
            'oauth_nonce'            => md5(uniqid((string) mt_rand(), true)),
            'oauth_signature_method' => 'HMAC-SHA1',
            'oauth_timestamp'        => time(),
            'oauth_version'          => '1.0A',
            'oauth_token'            => $this->username,
        ];

        if (isset($params['oauth_verifier'])) {
            $oauth['oauth_verifier'] = $params['oauth_verifier'];
            unset($params['oauth_verifier']);
        }
        // encode all oauth values
        foreach ($oauth as $k => $v) {
            $oauth[$k] = rawurlencode($v);
        }

        // encode all non '@' params
        // keep sigParams for signature generation (exclude '@' params)
        // rename '@key' to 'key'
        $sigParams = [];
        $hasFile   = false;
        if (is_array($params)) {
            foreach ($params as $k => $v) {
                if (strncmp('@', $k, 1) !== 0) {
                    $sigParams[$k] = rawurlencode($v);
                    $params[$k]    = rawurlencode($v);
                } else {
                    $params[substr($k, 1)] = $v;
                    unset($params[$k]);
                    $hasFile = true;
                }
            }

            if ($hasFile === true) {
                $sigParams = [];
            }
        }

        $sigParams = array_merge($oauth, $sigParams);

        // sorting
        ksort($sigParams);

        // signing
        $oauth['oauth_signature'] = rawurldecode($this->generateSignature($method, $url, $sigParams));

        return ['request' => $params, 'oauth' => $oauth];
    }

    protected function generateSignature(string $method, string $url, array $params = []): string
    {
        // concatenating and encode
        $concat = '';
        foreach ($params as $key => $value) {
            $concat .= "{$key}={$value}&";
        }
        $concat             = substr($concat, 0, -1);
        $concatenatedParams = rawurlencode($concat);

        // normalize url
        $urlParts = parse_url($url);
        $scheme   = strtolower($urlParts['scheme']);
        $host     = strtolower($urlParts['host']);
        $port     = isset($urlParts['port']) ? (int) $urlParts['port'] : 0;
        $retval   = strtolower($scheme) . '://' . strtolower($host);
        if (!empty($port) && (($scheme === 'http' && $port !== 80) || ($scheme === 'https' && $port !== 443))) {
            $retval .= ":{$port}";
        }

        $retval .= $urlParts['path'];
        if (!empty($urlParts['query'])) {
            $retval .= "?{$urlParts['query']}";
        }

        $normalizedUrl = rawurlencode($retval);
        $method        = rawurlencode($method); // don't need this but why not?

        $signatureBaseString = "{$method}&{$normalizedUrl}&{$concatenatedParams}";

        // sign the signature string
        $key = rawurlencode($this->consumerSecret . '&' . rawurlencode($this->password));

        return base64_encode(hash_hmac('sha1', $signatureBaseString, $key, true));
    }
}
