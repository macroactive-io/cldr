<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory RE - Réunion.
 */
class TerritoryRe extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'RE';
    }
}
