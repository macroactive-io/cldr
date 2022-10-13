<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptCyrs - Representation of the Cyrillic (Old Church Slavonic variant) script.
 */
class ScriptCyrs extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Cyrs';
    }

    public function number()
    {
        return '221';
    }
}
