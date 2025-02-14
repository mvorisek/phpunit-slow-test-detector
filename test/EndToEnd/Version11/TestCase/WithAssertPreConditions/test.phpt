--TEST--
With a test case that sleeps in assertPreConditions() method
--FILE--
<?php

declare(strict_types=1);

use PHPUnit\TextUI;

$_SERVER['argv'][] = '--configuration=test/EndToEnd/Version11/TestCase/WithAssertPreConditions/phpunit.xml';

require_once __DIR__ . '/../../../../../vendor/autoload.php';

$application = new TextUI\Application();

$application->run($_SERVER['argv']);
--EXPECTF--
PHPUnit %s

Runtime: %s
Configuration: %s/EndToEnd/Version11/TestCase/WithAssertPreConditions/phpunit.xml

...                                                                 3 / 3 (100%)

Detected 3 tests where the duration exceeded the maximum duration (100 ms).

1. 4%s ms Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version11\TestCase\WithAssertPreConditions\SleeperTest::testSleeperSleepsLongerThanMaximumDurationFromXmlConfigurationWithDataProvider with data set #1 (300)
2. 3%s ms Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version11\TestCase\WithAssertPreConditions\SleeperTest::testSleeperSleepsLongerThanMaximumDurationFromXmlConfigurationWithDataProvider with data set #0 (200)
3. 1%s ms Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version11\TestCase\WithAssertPreConditions\SleeperTest::testSleeperSleepsLessThanMaximumDurationFromXmlConfiguration

Time: %s, Memory: %s

OK (3 tests, 3 assertions)
