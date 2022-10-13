<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLatn - Representation of the Latin script.
 */
class ScriptLatn extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Latn';
    }

    public function number()
    {
        return '215';
    }

    public function unicodeName()
    {
        return 'Latin';
    }
}
