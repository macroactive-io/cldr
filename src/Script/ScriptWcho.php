<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptWara - Representation of the Wancho script.
 */
class ScriptWcho extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Wcho';
    }

    public function number()
    {
        return '283';
    }

    public function unicodeName()
    {
        return 'Wancho';
    }
}
