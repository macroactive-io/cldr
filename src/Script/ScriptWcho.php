<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptWara - Representation of the Wancho script.
 * @psalm-immutable
 */
class ScriptWcho extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Wcho';
    }

    public function number(): string
    {
        return '283';
    }

    public function unicodeName(): string
    {
        return 'Wancho';
    }
}
