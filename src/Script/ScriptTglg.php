<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTglg - Representation of the Tagalog (Baybayin, Alibata) script.
 */
class ScriptTglg extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Tglg';
    }

    public function number()
    {
        return '370';
    }

    public function unicodeName()
    {
        return 'Tagalog';
    }
}
