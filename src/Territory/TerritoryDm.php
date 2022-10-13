<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory DM - Dominica.
 */
class TerritoryDm extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'DM';
    }

    public function firstDay()
    {
        return 0;
    }
}
