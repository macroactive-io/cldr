<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory JM - Jamaica.
 */
class TerritoryJm extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'JM';
    }

    public function firstDay()
    {
        return 0;
    }
}
