<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPiqd - Representation of the Piqd script.
 */
class ScriptPiqd extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Piqd';
    }

    public function number()
    {
        return '293';
    }
}
