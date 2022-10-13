<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMult - Representation of the  Multani script.
 */
class ScriptMult extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mult';
    }

    public function number()
    {
        return '323';
    }

    public function unicodeName()
    {
        return 'Multani';
    }
}
