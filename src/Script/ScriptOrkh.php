<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptOrkh - Representation of the Old Turkic, Orkhon Runic script.
 * @psalm-immutable
 */
class ScriptOrkh extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Orkh';
    }

    public function number(): string
    {
        return '175';
    }

    public function unicodeName(): string
    {
        return 'Old_Turkic';
    }
}
