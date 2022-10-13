<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptAdlm - Representation of the Adlam script.
 */
class ScriptAdlm extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Adlm';
    }

    public function number()
    {
        return '166';
    }

    public function unicodeName()
    {
        return 'Adlam';
    }
}
