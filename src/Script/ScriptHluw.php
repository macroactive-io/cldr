<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptHluw - Representation of the Anatolian Hieroglyphs (Luwian Hieroglyphs, Hittite Hieroglyphs) script.
 * @psalm-immutable
 */
class ScriptHluw extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hluw';
    }

    public function number(): string
    {
        return '080';
    }

    public function unicodeName(): string
    {
        return 'Anatolian_Hieroglyphs';
    }
}
