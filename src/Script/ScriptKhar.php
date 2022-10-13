<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKhar - Representation of the Kharoshthi script.
 */
class ScriptKhar extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Khar';
    }

    public function number()
    {
        return '305';
    }

    public function unicodeName()
    {
        return 'Kharoshthi';
    }
}
