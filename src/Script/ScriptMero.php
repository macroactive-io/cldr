<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMero - Representation of the Meroitic Hieroglyphs script.
 * @psalm-immutable
 */
class ScriptMero extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Mero';
    }

    public function number(): string
    {
        return '100';
    }

    public function unicodeName(): string
    {
        return 'Meroitic_Hieroglyphs';
    }
}
