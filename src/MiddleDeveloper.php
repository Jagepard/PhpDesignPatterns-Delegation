<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

class MiddleDeveloper implements DeveloperInterface
{
    /**
     * @return string
     */
    public function writeCode(): string
    {
        return (new Program('Some regular code'))->getType();
    }
}
