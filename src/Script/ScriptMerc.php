<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptMerc - Representation of the Meroitic Cursive script.
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
