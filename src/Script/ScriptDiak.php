<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptDiak - Representation of the Diak script.
 * @psalm-immutable
 */
class ScriptDiak extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Diak';
    }

    public function number(): string
    {
        return '342';
    }

    public function unicodeName(): string
    {
        return 'Dives_Akuru';
    }
}
