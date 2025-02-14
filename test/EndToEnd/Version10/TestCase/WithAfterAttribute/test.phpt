--TEST--
With a test case that sleeps in a method with After attribute
--FILE--
<?php

declare(strict_types=1);

use PHPUnit\TextUI;

$_SERVER['argv'][] = '--configuration=test/EndToEnd/Version10/TestCase/WithAfterAttribute/phpunit.xml';

require_once __DIR__ . '/../../../../../vendor/autoload.php';

$application = new TextUI\Application();

$application->run($_SERVER['argv']);
--EXPECTF--
PHPUnit %s

Runtime: %s
Configuration: %s/EndToEnd/Version10/TestCase/WithAfterAttribute/phpunit.xml

...                                                                 3 / 3 (100%)

Detected 3 tests where the duration exceeded the maximum duration (100 ms).

1. 4%s ms Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version10\TestCase\WithAfterAttribute\SleeperTest::testSleeperSleepsLongerThanMaximumDurationFromXmlConfigurationWithDataProvider with data set #1 (300)
2. 3%s ms Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version10\TestCase\WithAfterAttribute\SleeperTest::testSleeperSleepsLongerThanMaximumDurationFromXmlConfigurationWithDataProvider with data set #0 (200)
3. 1%s ms Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version10\TestCase\WithAfterAttribute\SleeperTest::testSleeperSleepsLessThanMaximumDurationFromXmlConfiguration

Time: %s, Memory: %s

OK (3 tests, 3 assertions)
