<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptArab - Representation of the Arabic script.
 */
class ScriptArab extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Arab';
    }

    public function numerals()
    {
        return ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
    }

    public function number()
    {
        return '160';
    }

    public function unicodeName()
    {
        return 'Arabic';
    }
}
