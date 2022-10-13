<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptWara - Representation of the Warang Citi (Varang Kshiti) script.
 * @psalm-immutable
 */
class ScriptWara extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Wara';
    }

    public function number(): string
    {
        return '262';
    }

    public function unicodeName(): string
    {
        return 'Warang_Citi';
    }
}
