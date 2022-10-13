<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NF - Norfolk Island.
 */
class TerritoryNf extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'NF';
    }
}
