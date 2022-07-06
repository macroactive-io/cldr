<?php

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCher - Representation of the Cherokee script.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class ScriptCher extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Cher';
    }

    public function number()
    {
        return '445';
    }

    public function unicodeName()
    {
        return 'Cherokee';
    }
}
