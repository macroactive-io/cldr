<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCyrl - Representation of the Cyrillic script.
 */
class ScriptCyrl extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Cyrl';
    }

    public function number()
    {
        return '220';
    }

    public function unicodeName()
    {
        return 'Cyrillic';
    }
}
