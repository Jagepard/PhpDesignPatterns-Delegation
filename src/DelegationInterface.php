<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

/**
 * Interface DelegationInterface
 * @package Fundamental\Delegation
 */
interface DelegationInterface
{

    /**
     * @param DeveloperInterface $developer
     */
    public function delegateTo(DeveloperInterface $developer): void;

    public function getCodeFromDeveloper(): string;
}
