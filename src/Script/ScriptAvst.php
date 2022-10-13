<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptAvst - Representation of the Avestan script.
 */
class ScriptAvst extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Avst';
    }

    public function number()
    {
        return '134';
    }

    public function unicodeName()
    {
        return 'Avestan';
    }
}
