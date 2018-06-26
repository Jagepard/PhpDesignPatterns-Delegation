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
    protected $developer;

    /**
     * @param DeveloperInterface $developer
     */
    public function delegateTo(DeveloperInterface $developer): void
    {
        $this->developer = $developer;
    }

    public function writeCode(): string
    {
        return 'Some excellent code';
    }

    public function getCodeFromDeveloper(): string
    {
        return $this->developer->writeCode();
    }
}
