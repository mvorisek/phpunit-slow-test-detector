--TEST--
With custom configuration setting the "maximum-count" parameter in the XML configuration file
--FILE--
<?php

declare(strict_types=1);

use PHPUnit\TextUI;

$_SERVER['argv'][] = '--configuration=test/EndToEnd/Version12/Configuration/MaximumCount/phpunit.xml';

require_once __DIR__ . '/../../../../../vendor/autoload.php';

$application = new TextUI\Application();

$application->run($_SERVER['argv']);
--EXPECTF--
PHPUnit %s

Runtime: %s
Configuration: %s/EndToEnd/Version12/Configuration/MaximumCount/phpunit.xml

......                                                              6 / 6 (100%)

Detected 5 tests where the duration exceeded the maximum duration (500 ms).

1. 1.0%s s Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version12\Configuration\MaximumCount\SleeperTest::testSleeperSleepsLongerThanDefaultMaximumDurationWithDataProvider with data set #4 (1000)
2.  9%s ms Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version12\Configuration\MaximumCount\SleeperTest::testSleeperSleepsLongerThanDefaultMaximumDurationWithDataProvider with data set #3 (900)
3.  8%s ms Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version12\Configuration\MaximumCount\SleeperTest::testSleeperSleepsLongerThanDefaultMaximumDurationWithDataProvider with data set #2 (800)

There are 2 additional slow tests that are not listed here.

Time: %s, Memory: %s

OK (6 tests, 6 assertions)
