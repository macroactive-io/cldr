<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyrc - Representation of the Syriac script.
 */
class ScriptSyrc extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Syrc';
    }

    public function number()
    {
        return '135';
    }

    public function unicodeName()
    {
        return 'Syriac';
    }
}
