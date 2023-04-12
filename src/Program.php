<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

class Program implements ProgramInterface
{
    private string $code;

    /**
     * Adds code
     * ---------
     * Добавляет программный код
     * 
     * @param  string $code
     */
    public function __construct(string $code)
    {
        $this->code = $code;
    }

    /**
     * Gets the code
     * -------------
     * Получает код
     * 
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
}
