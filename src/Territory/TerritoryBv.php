<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BV - Bouvet Island.
 */
class TerritoryBv extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'BV';
    }
}
