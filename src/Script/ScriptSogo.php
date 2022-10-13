<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyrc - Representation of the Old Sogdian script.
 */
class ScriptSogo extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Sogo';
    }

    public function number()
    {
        return '142';
    }

    public function unicodeName()
    {
        return 'Old_Sogdian';
    }
}
