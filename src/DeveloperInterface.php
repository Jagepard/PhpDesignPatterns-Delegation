<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

/**
 * Interface DeveloperInterface
 * @package Fundamental\Delegation
 */
interface DeveloperInterface
{
    /**
     * @return string
     */
    public function writeCode(): string;
}
