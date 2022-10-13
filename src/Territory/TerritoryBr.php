<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BR - Brazil.
 */
class TerritoryBr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'BR';
    }

    public function firstDay()
    {
        return 0;
    }
}
