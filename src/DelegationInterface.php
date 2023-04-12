<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

interface DelegationInterface
{
    /**
     * @param  DeveloperInterface $developer
     * @return void
     */
    public function delegateTo(DeveloperInterface $developer): void;
}
