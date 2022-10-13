<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptOgam - Representation of the Ogham script.
 */
class ScriptOgam extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Ogam';
    }

    public function number()
    {
        return '212';
    }

    public function unicodeName()
    {
        return 'Ogham';
    }
}
