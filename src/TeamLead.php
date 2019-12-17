<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

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
        return (new Program('Some excellent code'))->getCode();
    }

    /**
     * @return string
     */
    public function getCodeFromDeveloper(): string
    {
        return $this->developer->writeCode();
    }
}
