<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCans - Representation of the Unified Canadian Aboriginal Syllabics script.
 */
class ScriptCans extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Cans';
    }

    public function number()
    {
        return '440';
    }

    public function unicodeName()
    {
        return 'Canadian_Aboriginal';
    }
}
