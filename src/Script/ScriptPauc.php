<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPauc - Representation of the Pau Cin Hau script.
 */
class ScriptPauc extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Pauc';
    }

    public function number()
    {
        return '263';
    }

    public function unicodeName()
    {
        return 'Pau_Cin_Hau';
    }
}
