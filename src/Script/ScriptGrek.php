<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGrek - Representation of the Greek script.
 */
class ScriptGrek extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Grek';
    }

    public function number()
    {
        return '200';
    }

    public function unicodeName()
    {
        return 'Greek';
    }
}
