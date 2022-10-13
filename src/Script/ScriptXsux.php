<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptXsux - Representation of the Cuneiform, Sumero-Akkadian script.
 */
class ScriptXsux extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Xsux';
    }

    public function number()
    {
        return '020';
    }

    public function unicodeName()
    {
        return 'Cuneiform';
    }
}
