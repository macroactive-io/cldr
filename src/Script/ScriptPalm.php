<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPalm - Representation of the Palmyrene script.
 */
class ScriptPalm extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Palm';
    }

    public function number()
    {
        return '126';
    }

    public function unicodeName()
    {
        return 'Palmyrene';
    }
}
