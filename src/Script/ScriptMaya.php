<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptMaya - Representation of the Mayan hieroglyphs script.
 */
class ScriptMaya extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Maya';
    }

    public function number()
    {
        return '090';
    }
}
