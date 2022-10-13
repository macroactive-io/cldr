<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptXpeo - Representation of the Old Persian script.
 */
class ScriptXpeo extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Xpeo';
    }

    public function number()
    {
        return '030';
    }

    public function unicodeName()
    {
        return 'Old_Persian';
    }
}
