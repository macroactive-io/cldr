<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory VA - Holy See (Vatican City State).
 */
class TerritoryVa extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'VA';
    }
}
