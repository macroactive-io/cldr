<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptInds - Representation of the Indus (Harappan) script.
 */
class ScriptInds extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Inds';
    }

    public function number()
    {
        return '610';
    }
}
