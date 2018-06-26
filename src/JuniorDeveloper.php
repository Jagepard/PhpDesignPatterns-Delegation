<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

/**
 * Class JuniorDeveloper
 * @package Fundamental\Delegation
 */
class JuniorDeveloper implements DeveloperInterface
{

    public function writeCode(): string
    {
        return 'Some really bad code';
    }
}
