<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptSinh - Representation of the Sinhala script.
 */
class ScriptSinh extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Sinh';
    }

    public function number()
    {
        return '348';
    }

    public function unicodeName()
    {
        return 'Sinhala';
    }
}
