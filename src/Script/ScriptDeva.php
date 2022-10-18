<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Script;

/**
 * Class ScriptDeva - Representation of the Devanagari script.
 * @psalm-immutable
 */
class ScriptDeva extends AbstractScript implements ScriptInterface
{
    public function code(): string
    {
        return 'Deva';
    }

    public function numerals(): array
    {
        return ['०', '१', '२', '३', '४', '५', '६', '७', '८', '९'];
    }

    public function number(): string
    {
        return '315';
    }

    public function unicodeName(): string
    {
        return 'Devanagari';
    }
}
