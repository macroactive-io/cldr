<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Runic
 *
 * @psalm-immutable
 */
class ScriptRunr extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Runr';
    }

    public function number(): string
    {
        return '211';
    }

    public function unicodeName(): string
    {
        return 'Runic';
    }
}
