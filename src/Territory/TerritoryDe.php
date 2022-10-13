<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory DE - Germany.
 */
class TerritoryDe extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'DE';
    }
}
