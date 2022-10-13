<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSyrj - Representation of the Syriac (Western variant) script.
 */
class ScriptSyrj extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Syrj';
    }

    public function number()
    {
        return '137';
    }
}
