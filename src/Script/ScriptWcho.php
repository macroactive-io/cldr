<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Wancho
 *
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
