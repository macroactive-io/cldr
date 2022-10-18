<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Warang Citi (Varang Kshiti)
 *
 * @psalm-immutable
 */
class ScriptWara extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Wara';
    }

    public function number(): string
    {
        return '262';
    }

    public function unicodeName(): string
    {
        return 'Warang_Citi';
    }
}
