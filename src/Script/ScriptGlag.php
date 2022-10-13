<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGlag - Representation of the Glagolitic script.
 */
class ScriptGlag extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Glag';
    }

    public function number()
    {
        return '225';
    }

    public function unicodeName()
    {
        return 'Glagolitic';
    }
}
