<?php

declare(strict_types=1);

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

    public function writeCode(): string;
}
