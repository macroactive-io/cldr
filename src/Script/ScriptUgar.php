<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptUgar - Representation of the Ugaritic script.
 */
class ScriptUgar extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Ugar';
    }

    public function number()
    {
        return '040';
    }

    public function unicodeName()
    {
        return 'Ugaritic';
    }
}
