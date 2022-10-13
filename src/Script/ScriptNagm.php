<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptNagm - Representation of the Nag Mundari script.
 */
class ScriptNagm extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Nagm';
    }

    public function number()
    {
        return '295';
    }
}
