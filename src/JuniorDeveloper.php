<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Fundamental\Delegation;

class JuniorDeveloper implements DeveloperInterface
{
    public function writeCode(): string
    {
        return (new Program("Some really bad code"))->getCode();
    }
}
