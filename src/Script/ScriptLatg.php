<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLatg - Representation of the Latin (Gaelic variant) script.
 */
class ScriptLatg extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Latg';
    }

    public function number()
    {
        return '216';
    }
}
