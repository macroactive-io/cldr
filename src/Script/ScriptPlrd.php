<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPlrd - Representation of the Miao (Pollard) script.
 */
class ScriptPlrd extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Plrd';
    }

    public function number()
    {
        return '282';
    }

    public function unicodeName()
    {
        return 'Miao';
    }
}
