<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGoth - Representation of the Gothic script.
 */
class ScriptGoth extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Goth';
    }

    public function number()
    {
        return '206';
    }

    public function unicodeName()
    {
        return 'Gothic';
    }
}
