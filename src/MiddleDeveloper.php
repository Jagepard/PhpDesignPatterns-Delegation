<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

class MiddleDeveloper implements DeveloperInterface
{
    /**
     * Writes program code
     * -------------------
     * Пишет код программы
     * 
     * @return string
     */
    public function writeCode(): string
    {
        return (new Program("Some regular code"))->getCode();
    }
}
