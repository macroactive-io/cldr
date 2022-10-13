<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptToto - Representation of the Toto script.
 */
class ScriptToto extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Toto';
    }

    public function number()
    {
        return '294';
    }

    public function unicodeName()
    {
        return 'Toto';
    }
}
