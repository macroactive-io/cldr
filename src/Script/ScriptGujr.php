<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptGujr - Representation of the Gujarati script.
 */
class ScriptGujr extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Gujr';
    }

    public function numerals()
    {
        return ['૦', '૧', '૨', '૩', '૪', '૫', '૬', '૭', '૮', '૯'];
    }

    public function number()
    {
        return '320';
    }

    public function unicodeName()
    {
        return 'Gujarati';
    }
}
