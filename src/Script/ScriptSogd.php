<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSogd - Representation of the Sogdian script.
 */
class ScriptSogd extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Sogd';
    }

    public function number()
    {
        return '141';
    }

    public function unicodeName()
    {
        return 'Sogdian';
    }
}
