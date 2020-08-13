<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

interface DelegationInterface
{
    public function delegateTo(DeveloperInterface $developer): void;
}
