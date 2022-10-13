<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PH - Philippines.
 */
class TerritoryPh extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'PH';
    }

    public function firstDay()
    {
        return 0;
    }

    public function paperSize()
    {
        return 'US-Letter';
    }
}
