<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptZsym - Representation of the Symbols script.
 */
class ScriptZsym extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Zsym';
    }

    public function number()
    {
        return '996';
    }
}
