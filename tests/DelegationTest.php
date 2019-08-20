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

class DelegationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var TeamLead
     */
    private $teamLead;

    protected function setUp(): void
    {
        $this->teamLead = new TeamLead();
    }

    public function testTeamLead()
    {
        $this->assertEquals("Some excellent code", $this->getTeamLead()->writeCode());

        $this->getTeamLead()->delegateTo($this->getTeamLead());
        $this->assertEquals("Some excellent code", $this->getTeamLead()->getCodeFromDeveloper());
    }

    public function testMiddle()
    {
        $this->getTeamLead()->delegateTo(new MiddleDeveloper());
        $this->assertEquals("Some regular code", $this->getTeamLead()->getCodeFromDeveloper());
    }

    public function testJunior()
    {
        $this->getTeamLead()->delegateTo(new JuniorDeveloper());
        $this->assertEquals("Some really bad code", $this->getTeamLead()->getCodeFromDeveloper());
    }

    /**
     * @return TeamLead
     */
    public function getTeamLead(): TeamLead
    {
        return $this->teamLead;
    }
}
