<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptKore - Representation of the Korean (alias for Hangul + Han) script.
 */
class ScriptKore extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Kore';
    }

    public function number()
    {
        return '287';
    }
}
