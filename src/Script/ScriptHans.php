<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptHans - Representation of the Simplified Han script.
 */
class ScriptHans extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Hans';
    }

    public function number()
    {
        return '501';
    }
}
