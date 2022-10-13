<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSund - Representation of the Sundanese script.
 */
class ScriptSund extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Sund';
    }

    public function numerals()
    {
        return ['᮰', '᮱', '᮲', '᮳', '᮴', '᮵', '᮶', '᮷', '᮸', '᮹'];
    }

    public function number()
    {
        return '362';
    }

    public function unicodeName()
    {
        return 'Sundanese';
    }
}
