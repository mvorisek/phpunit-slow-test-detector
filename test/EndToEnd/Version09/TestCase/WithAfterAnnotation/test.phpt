--TEST--
With a test case that sleeps in a method with @after annotation
--FILE--
<?php

declare(strict_types=1);

use PHPUnit\TextUI;

$_SERVER['argv'][] = '--configuration=test/EndToEnd/Version09/TestCase/WithAfterAnnotation/phpunit.xml';

require_once __DIR__ . '/../../../../../vendor/autoload.php';

PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s

Runtime: %s
Configuration: %s/EndToEnd/Version09/TestCase/WithAfterAnnotation/phpunit.xml

...                                                                 3 / 3 (100%)

Detected 3 tests where the duration exceeded the maximum duration.

1. 4%s ms (100 ms) Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version09\TestCase\WithAfterAnnotation\SleeperTest::testSleeperSleepsLongerThanMaximumDurationFromXmlConfigurationWithDataProvider with data set #1 (300)
2. 3%s ms (100 ms) Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version09\TestCase\WithAfterAnnotation\SleeperTest::testSleeperSleepsLongerThanMaximumDurationFromXmlConfigurationWithDataProvider with data set #0 (200)
3. 1%s ms (100 ms) Ergebnis\PHPUnit\SlowTestDetector\Test\EndToEnd\Version09\TestCase\WithAfterAnnotation\SleeperTest::testSleeperSleepsLessThanMaximumDurationFromXmlConfiguration

Time: %s, Memory: %s

OK (3 tests, 3 assertions)
