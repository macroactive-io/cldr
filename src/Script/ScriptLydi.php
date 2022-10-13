<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLydi - Representation of the Lydian script.
 */
class ScriptLydi extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Lydi';
    }

    public function number()
    {
        return '116';
    }

    public function unicodeName()
    {
        return 'Lydian';
    }
}
