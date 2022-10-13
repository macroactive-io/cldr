<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCpmn - Representation of the Masaram Gondi script.
 */
class ScriptGonm extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Gonm';
    }

    public function number()
    {
        return '313';
    }

    public function unicodeName()
    {
        return 'Masaram_Gondi';
    }
}
