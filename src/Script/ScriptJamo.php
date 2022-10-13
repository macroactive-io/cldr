<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptJamo - Representation of the Jamo script.
 */
class ScriptJamo extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Jamo';
    }

    public function number()
    {
        return '284';
    }
}
