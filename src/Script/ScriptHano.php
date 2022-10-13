<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHano - Representation of the Hanunoo (Hanunóo) script.
 * @psalm-immutable
 */
class ScriptHano extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Hano';
    }

    public function number(): string
    {
        return '371';
    }

    public function unicodeName(): string
    {
        return 'Hanunoo';
    }
}
