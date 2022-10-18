<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Meroitic Cursive
 *
 * @psalm-immutable
 */
class ScriptMerc extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Merc';
    }

    public function number(): string
    {
        return '101';
    }

    public function unicodeName(): string
    {
        return 'Meroitic_Cursive';
    }
}
