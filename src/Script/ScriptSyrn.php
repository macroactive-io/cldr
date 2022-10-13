<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyrn - Representation of the Syriac (Eastern variant) script.
 */
class ScriptSyrn extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Syrn';
    }

    public function number()
    {
        return '136';
    }
}
