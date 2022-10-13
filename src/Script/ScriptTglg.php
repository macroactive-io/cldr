<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTglg - Representation of the Tagalog (Baybayin, Alibata) script.
 * @psalm-immutable
 */
class ScriptTglg extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Tglg';
    }

    public function number(): string
    {
        return '370';
    }

    public function unicodeName(): string
    {
        return 'Tagalog';
    }
}
