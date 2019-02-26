<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

/**
 * Class Program
 */
class Program implements ProgramInterface
{
    /**
     * @var string
     */
    private $type;

    /**
     * Program constructor.
     * @param $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType(): string
    {
        return $this->type;
    }
}
