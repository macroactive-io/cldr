<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptBrai - Representation of the Braille script.
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
