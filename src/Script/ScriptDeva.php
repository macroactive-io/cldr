<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Script;

/**
 * Class ScriptDeva - Representation of the Devanagari script.
 */
class ScriptDeva extends AbstractScript implements ScriptInterface
{
    public function code()
    {
        return 'Deva';
    }

    public function numerals()
    {
        return ['०', '१', '२', '३', '४', '५', '६', '७', '८', '९'];
    }

    public function number()
    {
        return '315';
    }

    public function unicodeName()
    {
        return 'Devanagari';
    }
}
