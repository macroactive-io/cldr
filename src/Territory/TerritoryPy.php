<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PY - Paraguay.
 */
class TerritoryPy extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'PY';
    }

    public function firstDay()
    {
        return 0;
    }
}
