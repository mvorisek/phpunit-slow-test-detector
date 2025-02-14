--TEST--
With a test case that sleeps in a tearDownAfterClass() method
--FILE--
<?php

declare(strict_types=1);

use PHPUnit\TextUI;

$_SERVER['argv'][] = '--configuration=test/EndToEnd/Version06/TestCase/WithTearDownAfterClass/phpunit.xml';

require_once __DIR__ . '/../../../../../vendor/autoload.php';

PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s

Runtime: %s
Configuration: %s/EndToEnd/Version06/TestCase/WithTearDownAfterClass/phpunit.xml

...                                                                 3 / 3 (100%)

Detected 2 tests where the duration exceeded the maximum duration (100 ms).

1. 3%s ms Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version06\TestCase\WithTearDownAfterClass\SleeperTest::testSleeperSleepsLongerThanMaximumDurationFromXmlConfigurationWithDataProvider with data set #1
2. 2%s ms Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version06\TestCase\WithTearDownAfterClass\SleeperTest::testSleeperSleepsLongerThanMaximumDurationFromXmlConfigurationWithDataProvider with data set #0

Time: %s, Memory: %s

OK (3 tests, 3 assertions)
