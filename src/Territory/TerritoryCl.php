<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CL - Chile.
 */
class TerritoryCl extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'CL';
    }

    public function paperSize()
    {
        return 'US-Letter';
    }
}
