<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Tai Viet
 *
 * @psalm-immutable
 */
class ScriptTavt extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tavt';
    }

    public function number(): string
    {
        return '359';
    }

    public function unicodeName(): string
    {
        return 'Tai_Viet';
    }
}
