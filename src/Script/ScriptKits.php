<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKits - Representation of the Khitan small script.
 */
class ScriptKits extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Kits';
    }

    public function number()
    {
        return '288';
    }

    public function unicodeName()
    {
        return 'Khitan_Small_Script';
    }
}
