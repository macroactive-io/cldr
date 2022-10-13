<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KE - Kenya.
 */
class TerritoryKe extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'KE';
    }

    public function firstDay()
    {
        return 0;
    }
}
