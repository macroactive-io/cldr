<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ER - Eritrea.
 */
class TerritoryEr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'ER';
    }

    public function firstDay()
    {
        return 6;
    }
}
