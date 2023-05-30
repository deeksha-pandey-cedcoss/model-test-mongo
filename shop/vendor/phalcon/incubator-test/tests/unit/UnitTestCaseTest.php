<?php

namespace Phalcon\Incubator\Test\Tests\Unit;

use Codeception\Test\Unit;
use Phalcon\Incubator\Test\PHPUnit\UnitTestCase as PHPUnitTestCase;
use Phalcon\Incubator\Test\UnitTestCase;

/**
 * \Phalcon\Test\Test\UnitTestCaseTest. Test That Old Placement Still Works Correctly.
 *
 * @copyright (c) 2011-2016 Phalcon Team
 * @link      http://www.phalconphp.com
 * @author    Phoenix Osiris <phoenix@twistersfury.com>
 * @package   Phalcon\Test\Test\Traits
 * @group     Acl
 *
 * The contents of this file are subject to the New BSD License that is
 * bundled with this package in the file docs/LICENSE.txt
 *
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world-wide-web, please send an email to license@phalconphp.com
 * so that we can send you a copy immediately.
 */
class UnitTestCaseTest extends Unit
{
    /** @var UnitTester */
    protected $tester;

    public function testUnitPlaceholder()
    {
        $this->tester->amGoingTo('Confirm That Place Holder Is Fine');

        $testSubject = $this->getMockBuilder(UnitTestCase::class)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();

        $this->assertInstanceOf(
            PHPUnitTestCase::class,
            $testSubject
        );
    }
}