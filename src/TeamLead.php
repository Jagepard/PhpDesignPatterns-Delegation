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

    /**
     * Delegates a task to another developer
     * -------------------------------------
     * Делегирует задачу другому разработчику
     * 
     * @param  DeveloperInterface $developer
     * @return void
     */
    public function delegateTo(DeveloperInterface $developer): void
    {
        $this->developer = $developer;
    }

    /**
     * Writes program code
     * -------------------
     * Пишет код программы
     * 
     * @return string
     */
    public function writeCode(): string
    {
        return (new Program("Some excellent code"))->getCode();
    }

    /**
     * Gets another developer's code
     * -----------------------------
     * Получает код другого разработчика
     * 
     * @return string
     */
    public function getCodeFromDeveloper(): string
    {
        return $this->developer->writeCode();
    }
}
