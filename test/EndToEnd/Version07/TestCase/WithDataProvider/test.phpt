--TEST--
With a test case that sleeps in a data provider
--FILE--
<?php

declare(strict_types=1);

use PHPUnit\TextUI;

$_SERVER['argv'][] = '--configuration=test/EndToEnd/Version07/TestCase/WithDataProvider/phpunit.xml';

require_once __DIR__ . '/../../../../../vendor/autoload.php';

PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s

Runtime: %s
Configuration: %s/EndToEnd/Version07/TestCase/WithDataProvider/phpunit.xml

...                                                                 3 / 3 (100%)

Detected 2 tests where the duration exceeded the maximum duration (100 ms).

1. 3%s ms Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version07\TestCase\WithDataProvider\SleeperTest::testSleeperSleepsLongerThanMaximumDurationFromXmlConfigurationWithDataProvider with data set #1 (300)
2. 2%s ms Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version07\TestCase\WithDataProvider\SleeperTest::testSleeperSleepsLongerThanMaximumDurationFromXmlConfigurationWithDataProvider with data set #0 (200)

Time: %s, Memory: %s

OK (3 tests, 3 assertions)
