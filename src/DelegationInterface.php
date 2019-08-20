<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

interface DelegationInterface
{
    /**
     * @param DeveloperInterface $developer
     */
    public function delegateTo(DeveloperInterface $developer): void;
}
