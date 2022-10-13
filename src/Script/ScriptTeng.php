<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptTeng - Representation of the Tengwar script.
 */
class ScriptTeng extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Teng';
    }

    public function number()
    {
        return '290';
    }
}
