<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation\Tests;

use Fundamental\Delegation\{TeamLead, JuniorDeveloper, MiddleDeveloper};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class DelegationTest extends PHPUnit_Framework_TestCase
{
    private TeamLead $teamLead;

    protected function setUp(): void
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
