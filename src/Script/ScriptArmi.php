<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptArmi - Representation of the Imperial Aramaic script.
 */
class ScriptArmi extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Armi';
    }

    public function number()
    {
        return '124';
    }

    public function unicodeName()
    {
        return 'Imperial_Aramaic';
    }
}
