<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NG - Nigeria.
 */
class TerritoryNg extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'NG';
    }

    public function firstDay()
    {
        return 0;
    }
}
