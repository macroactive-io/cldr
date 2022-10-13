<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptRoro - Representation of the Rongorongo script.
 */
class ScriptRoro extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Roro';
    }

    public function number()
    {
        return '620';
    }
}
