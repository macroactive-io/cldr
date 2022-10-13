<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptChrs - Representation of the Chorasmian script.
 */
class ScriptChrs extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Chrs';
    }

    public function number()
    {
        return '109';
    }

    public function unicodeName()
    {
        return 'Chorasmian';
    }
}
