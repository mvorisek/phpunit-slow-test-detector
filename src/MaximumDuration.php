<?php

declare(strict_types=1);

/**
 * Copyright (c) 2021-2023 Andreas Möller
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/ergebnis/phpunit-slow-test-detector
 */

namespace Ergebnis\PHPUnit\SlowTestDetector;

/**
 * @internal
 */
final class MaximumDuration
{
    private function __construct(private readonly Duration $duration)
    {
    }

    /**
     * @throws Exception\InvalidSeconds
     */
    public static function fromSeconds(int $seconds): self
    {
        if (0 >= $seconds) {
            throw Exception\InvalidSeconds::notGreaterThanZero($seconds);
        }

        return new self(Duration::fromSecondsAndNanoseconds(
            $seconds,
            0,
        ));
    }

    /**
     * @throws Exception\InvalidMilliseconds
     */
    public static function fromMilliseconds(int $milliseconds): self
    {
        if (0 >= $milliseconds) {
            throw Exception\InvalidMilliseconds::notGreaterThanOrEqualToZero($milliseconds);
        }

        $seconds = \intdiv(
            $milliseconds,
            1_000,
        );

        $nanoseconds = ($milliseconds - $seconds * 1_000) * 1_000_000;

        return new self(Duration::fromSecondsAndNanoseconds(
            $seconds,
            $nanoseconds,
        ));
    }

    public function toDuration(): Duration
    {
        return $this->duration;
    }
}
