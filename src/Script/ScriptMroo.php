<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMroo - Representation of the Mro, Mru script.
 */
class ScriptMroo extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Mroo';
    }

    public function number()
    {
        return '264';
    }

    public function unicodeName()
    {
        return 'Mro';
    }
}
