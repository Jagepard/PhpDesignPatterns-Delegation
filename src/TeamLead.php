<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

class TeamLead implements DeveloperInterface, DelegationInterface
{
    private DeveloperInterface $developer;

    public function delegateTo(DeveloperInterface $developer): void
    {
        $this->developer = $developer;
    }

    public function writeCode(): string
    {
        return (new Program("Some excellent code"))->getCode();
    }

    public function getCodeFromDeveloper(): string
    {
        return $this->developer->writeCode();
    }
}
