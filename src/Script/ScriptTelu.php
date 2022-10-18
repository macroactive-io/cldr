<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Telugu
 *
 * @psalm-immutable
 */
class ScriptTelu extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Telu';
    }

    public function numerals(): array
    {
        return ['౦', '౧', '౨', '౩', '౪', '౫', '౬', '౭', '౮', '౯'];
    }

    public function number(): string
    {
        return '340';
    }

    public function unicodeName(): string
    {
        return 'Telugu';
    }
}
