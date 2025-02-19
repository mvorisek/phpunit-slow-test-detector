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

namespace Ergebnis\PHPUnit\SlowTestDetector\Test\Unit\Attribute;

use Ergebnis\DataProvider;
use Ergebnis\PHPUnit\SlowTestDetector\Attribute;
use Ergebnis\PHPUnit\SlowTestDetector\Duration;
use Ergebnis\PHPUnit\SlowTestDetector\Exception;
use Ergebnis\PHPUnit\SlowTestDetector\Test;
use PHPUnit\Framework;

/**
 * @covers \Ergebnis\PHPUnit\SlowTestDetector\Attribute\MaximumDuration
 *
 * @uses \Ergebnis\PHPUnit\SlowTestDetector\Duration
 * @uses \Ergebnis\PHPUnit\SlowTestDetector\Exception\InvalidMilliseconds
 */
final class MaximumDurationTest extends Framework\TestCase
{
    use Test\Util\Helper;

    /**
     * @dataProvider \Ergebnis\DataProvider\IntProvider::lessThanZero
     * @dataProvider \Ergebnis\DataProvider\IntProvider::zero
     */
    public function testConstructorRejectsInvalidValue(int $milliseconds): void
    {
        $this->expectException(Exception\InvalidMilliseconds::class);

        Duration::fromMilliseconds($milliseconds);
    }

    public function testConstructorSetsValue(): void
    {
        $milliseconds = self::faker()->numberBetween(1);

        $maximumDuration = new Attribute\MaximumDuration($milliseconds);

        self::assertSame($milliseconds, $maximumDuration->milliseconds());
    }
}
