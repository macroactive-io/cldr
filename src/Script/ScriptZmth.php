<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptZmth - Representation of the Mathematical notation script.
 */
class ScriptZmth extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Zmth';
    }

    public function number()
    {
        return '995';
    }
}
