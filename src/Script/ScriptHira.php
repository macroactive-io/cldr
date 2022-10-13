<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHira - Representation of the Hiragana script.
 */
class ScriptHira extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hira';
    }

    public function number()
    {
        return '410';
    }

    public function unicodeName()
    {
        return 'Hiragana';
    }
}
