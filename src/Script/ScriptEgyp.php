<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptEgyp - Representation of the Egyptian hieroglyphs script.
 */
class ScriptEgyp extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Egyp';
    }

    public function number()
    {
        return '050';
    }

    public function unicodeName()
    {
        return 'Egyptian_Hieroglyphs';
    }
}
