<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ID - Indonesia.
 */
class TerritoryId extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'ID';
    }

    public function firstDay()
    {
        return 0;
    }
}
