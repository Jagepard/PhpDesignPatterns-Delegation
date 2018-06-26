<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

/**
 * Class MiddleDeveloper
 * @package Fundamental\Delegation
 */
class MiddleDeveloper implements DeveloperInterface
{

    public function writeCode(): string
    {
        return 'Some regular code';
    }
}
