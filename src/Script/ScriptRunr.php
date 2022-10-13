<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptRunr - Representation of the Runic script.
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
