<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MO - Macao.
 */
class TerritoryMo extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'MO';
    }

    public function firstDay()
    {
        return 0;
    }
}
