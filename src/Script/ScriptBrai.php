<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBrai - Representation of the Braille script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptBrai extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Brai';
    }

    public function number()
    {
        return '570';
    }

    public function unicodeName()
    {
        return 'Braille';
    }
}
