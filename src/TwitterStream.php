<?php

namespace stevecoug\TwitterStream;

use stevecoug\TwitterStream\Contracts\StreamManager;
use stevecoug\TwitterStream\Support\Clock;
use JsonCollectionParser\Listener;
use JsonCollectionParser\Stream\DataStream;
use JsonStreamingParser\Parser;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

abstract class TwitterStream implements StreamManager
{
    protected int $backfill     = 0;
    protected array $fields     = [];
    protected array $expansions = [];

    protected ?ResponseInterface $response = null;
    protected ?StreamInterface $stream     = null;
    protected ?Parser $parser              = null;
    protected int $received                = 0;
    protected int $createdAt;

    protected int $tweetLimit = PHP_INT_MAX;

    /** @var int The minimum payload length for a tweet. It assumes no content, no expansions, no fields. */
    protected int $bufferSize = 85;

    public function response(): ResponseInterface
    {
        // If used wrong, this could be null.
        /* @phpstan-ignore-next-line */
        return $this->response;
    }

    public function stream(): StreamInterface
    {
        // If used wrong, this could be null.
        /* @phpstan-ignore-next-line */
        return $this->stream;
    }

    public function jsonParser(): Parser
    {
        // If used wrong, this could be null.
        /* @phpstan-ignore-next-line */
        return $this->parser;
    }

    public function createdAt(): int
    {
        return $this->createdAt;
    }

    public function tweetsReceived(): int
    {
        return $this->received;
    }

    public function withBufferSize(int $size): self
    {
        $this->bufferSize = $size;

        return $this;
    }

    public function withTweetLimit(int $limit): self
    {
        $this->tweetLimit = $limit;

        return $this;
    }

    public function listen(TwitterConnection $connection, callable $callback): void
    {
        $this->response  = $connection->request('GET', $this->toURL(), ['stream' => true]);
        $this->stream    = $this->response->getBody();
        $this->createdAt = Clock::now();

        $this->parser = new Parser(
            DataStream::get($this->response),
            new Listener(
                function (object $item) use ($callback) {
                    $this->received++;

                    $callback($item, $this);

                    if ($this->tweetLimit <= $this->received) {
                        $this->stopListening();
                    }
                },
                false
            ),
            "\r\n",
            false,
            $this->bufferSize
        );

        $this->parser->parse();
    }

    public function toURL(): string
    {
        $parameters = array_filter([
            'expansions'       => implode(',', $this->expansions),
            'backfill_minutes' => $this->backfill,
        ]);

        foreach ($this->fields as $type => $fields) {
            $parameters[$type . '.fields'] = implode(',', is_array($fields) ? $fields : [$fields]);
        }

        return sprintf('%s%s', $this->endpoint(), count($parameters) > 0 ? '?' . http_build_query($parameters) : '');
    }

    abstract public function endpoint(): string;

    public function stopListening(): self
    {
        if ($this->parser) $this->parser->stop();
        if ($this->stream) $this->stream->close();

        return $this;
    }

    public function timeElapsedInSeconds()
    {
        return max(0, Clock::now() - $this->createdAt);
    }

    public function __destruct()
    {
        $this->stopListening();
    }

    public function backfill(int $minutes): self
    {
        $this->backfill = $minutes;

        return $this;
    }

    public function expansions(string ...$expansions): self
    {
        $this->expansions = [...$this->expansions, ...$expansions];

        return $this;
    }

    public function fields(array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }
}
