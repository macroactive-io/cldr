<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory LA - Lao People's Democratic Republic.
 */
class TerritoryLa extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'LA';
    }

    public function firstDay()
    {
        return 0;
    }
}
