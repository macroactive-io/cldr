<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCpmn - Representation of the Makasar script.
 */
class ScriptMaka extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Maka';
    }

    public function number()
    {
        return '366';
    }

    public function unicodeName()
    {
        return 'Makasar';
    }
}
