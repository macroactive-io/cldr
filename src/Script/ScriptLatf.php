<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptLatf - Representation of the Latin (Fraktur variant) script.
 */
class ScriptLatf extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Latf';
    }

    public function number()
    {
        return '217';
    }
}
