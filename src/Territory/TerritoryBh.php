<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BH - Bahrain.
 */
class TerritoryBh extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'BH';
    }

    public function firstDay()
    {
        return 6;
    }

    public function weekendStart()
    {
        return 5;
    }

    public function weekendEnd()
    {
        return 6;
    }
}
