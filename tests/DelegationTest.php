<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation\Tests;

use Fundamental\Delegation\TeamLead;
use Fundamental\Delegation\JuniorDeveloper;
use Fundamental\Delegation\MiddleDeveloper;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class DelegationTest
 * @package Fundamental\Delegation\Tests
 */
class DelegationTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var TeamLead
     */
    protected $teamLead;

    protected function setUp()
    {
        $this->teamLead = new TeamLead();
    }

    public function testTeamLead()
    {
        $this->assertEquals("Some excellent code", $this->teamLead->writeCode());

        $this->teamLead->delegateTo($this->teamLead);
        $this->assertEquals("Some excellent code", $this->teamLead->getCodeFromDeveloper());
    }

    public function testMiddle()
    {
        $this->teamLead->delegateTo(new MiddleDeveloper());
        $this->assertEquals("Some regular code", $this->teamLead->getCodeFromDeveloper());
    }

    public function testJunior()
    {
        $this->teamLead->delegateTo(new JuniorDeveloper());
        $this->assertEquals("Some really bad code", $this->teamLead->getCodeFromDeveloper());
    }
}
