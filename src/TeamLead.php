<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

/**
 * Class TeamLead
 * @package Fundamental\Delegation
 */
class TeamLead implements DeveloperInterface, DelegationInterface
{
    /**
     * @var DeveloperInterface
     */
    private $developer;

    /**
     * @param DeveloperInterface $developer
     */
    public function delegateTo(DeveloperInterface $developer): void
    {
        $this->developer = $developer;
    }

    /**
     * @return string
     */
    public function writeCode(): string
    {
        return (new Program('Some excellent code'))->getType();
    }

    /**
     * @return string
     */
    public function getCodeFromDeveloper(): string
    {
        return $this->getDeveloper()->writeCode();
    }

    /**
     * @return DeveloperInterface
     */
    public function getDeveloper(): DeveloperInterface
    {
        return $this->developer;
    }
}
