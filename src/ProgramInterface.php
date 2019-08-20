<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

interface ProgramInterface
{
    /**
     * @return string
     */
    public function getType(): string;
}
