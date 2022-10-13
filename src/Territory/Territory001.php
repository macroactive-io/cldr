<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 001 - World.
 */
class Territory001 extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return '001';
    }
}
