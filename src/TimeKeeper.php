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
final class TimeKeeper
{
    /**
     * @var array<string, PhaseStart>
     */
    private array $phaseStarts = [];

    public function start(
        PhaseIdentifier $phaseIdentifier,
        Time $startTime
    ): void {
        $key = $phaseIdentifier->toString();

        $this->phaseStarts[$key] = PhaseStart::create(
            $phaseIdentifier,
            $startTime,
        );
    }

    public function stop(
        PhaseIdentifier $phaseIdentifier,
        Time $stopTime
    ): Phase {
        $key = $phaseIdentifier->toString();

        if (!\array_key_exists($key, $this->phaseStarts)) {
            return Phase::create(
                $phaseIdentifier,
                $stopTime,
                $stopTime,
            );
        }

        $phaseStart = $this->phaseStarts[$key];

        unset($this->phaseStarts[$key]);

        return Phase::create(
            $phaseIdentifier,
            $phaseStart->startTime(),
            $stopTime,
        );
    }
}
