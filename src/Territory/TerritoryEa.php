<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory EA - Ceuta, Melilla.
 */
class TerritoryEa extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'EA';
    }
}
