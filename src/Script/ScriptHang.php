<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHang - Representation of the Hangul script.
 */
class ScriptHang extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hang';
    }

    public function number()
    {
        return '286';
    }

    public function unicodeName()
    {
        return 'Hangul';
    }
}
