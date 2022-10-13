<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptItal - Representation of the Old Italic (Etruscan, Oscan, etc.) script.
 */
class ScriptItal extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Ital';
    }

    public function number()
    {
        return '210';
    }

    public function unicodeName()
    {
        return 'Old_Italic';
    }
}
