<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptPrti - Representation of the Inscriptional Parthian script.
 */
class ScriptPrti extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Prti';
    }

    public function number()
    {
        return '130';
    }

    public function unicodeName()
    {
        return 'Inscriptional_Parthian';
    }
}
