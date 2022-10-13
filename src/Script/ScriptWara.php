<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptWara - Representation of the Warang Citi (Varang Kshiti) script.
 */
class ScriptWara extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Wara';
    }

    public function number()
    {
        return '262';
    }

    public function unicodeName()
    {
        return 'Warang_Citi';
    }
}
