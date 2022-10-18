<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Anatolian Hieroglyphs (Luwian Hieroglyphs, Hittite Hieroglyphs)
 *
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
