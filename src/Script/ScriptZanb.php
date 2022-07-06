<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptWara - Representation of the Zanabazar Square script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptZanb extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Zanb';
    }

    public function number()
    {
        return '339';
    }

    public function unicodeName()
    {
        return 'Zanabazar_Square';
    }
}
