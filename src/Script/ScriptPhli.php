<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPhli - Representation of the Inscriptional Pahlavi script.
 */
class ScriptPhli extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Phli';
    }

    public function number()
    {
        return '131';
    }

    public function unicodeName()
    {
        return 'Inscriptional_Pahlavi';
    }
}
