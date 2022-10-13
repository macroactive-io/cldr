<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BD - Bangladesh.
 */
class TerritoryBd extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'BD';
    }

    public function firstDay()
    {
        return 0;
    }
}
