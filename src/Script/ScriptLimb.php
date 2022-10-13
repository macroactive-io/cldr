<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLimb - Representation of the Limbu script.
 */
class ScriptLimb extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Limb';
    }

    public function numerals()
    {
        return ['᥆', '᥇', '᥈', '᥉', '᥊', '᥋', '᥌', '᥍', '᥎', '᥏'];
    }

    public function number()
    {
        return '336';
    }

    public function unicodeName()
    {
        return 'Limbu';
    }
}
