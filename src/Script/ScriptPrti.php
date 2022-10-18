<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Inscriptional Parthian
 *
 * @psalm-immutable
 */
class ScriptPrti extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Prti';
    }

    public function number(): string
    {
        return '130';
    }

    public function unicodeName(): string
    {
        return 'Inscriptional_Parthian';
    }
}
