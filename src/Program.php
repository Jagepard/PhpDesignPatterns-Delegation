<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

class Program implements ProgramInterface
{
    /**
     * @var string
     */
    private $code;

    /**
     * Program constructor.
     * @param $code
     */
    public function __construct(string $code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode(): string
    {
        return $this->code;
    }
}
