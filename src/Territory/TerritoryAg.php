<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AG - Antigua and Barbuda.
 */
class TerritoryAg extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'AG';
    }

    public function firstDay()
    {
        return 0;
    }
}
