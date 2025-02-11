--TEST--
With @maximumDuration and @slowThreshold annotations
--FILE--
<?php

declare(strict_types=1);

use PHPUnit\TextUI;

$_SERVER['argv'][] = '--configuration=test/EndToEnd/Version10/TestMethod/WithMaximumDurationAndSlowThresholdAnnotations/phpunit.xml';

require_once __DIR__ . '/../../../../../vendor/autoload.php';

$application = new TextUI\Application();

$application->run($_SERVER['argv']);
--EXPECTF--
PHPUnit %s

Runtime: %s
Configuration: %s/EndToEnd/Version10/TestMethod/WithMaximumDurationAndSlowThresholdAnnotations/phpunit.xml

..                                                                  2 / 2 (100%)

Detected 1 test where the duration exceeded the maximum duration.

1. 3%s ms (200 ms) Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version10\TestMethod\WithMaximumDurationAndSlowThresholdAnnotations\SleeperTest::testSleeperSleepsLongerThanMaximumDurationFromAnnotationWhenTestMethodHasMaximumDurationAndSlowThresholdAnnotations

Time: %s, Memory: %s

OK (2 tests, 2 assertions)
