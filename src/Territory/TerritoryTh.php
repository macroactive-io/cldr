<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TH - Thailand.
 */
class TerritoryTh extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'TH';
    }

    public function firstDay()
    {
        return 0;
    }
}
