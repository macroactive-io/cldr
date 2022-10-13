<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CR - Costa Rica.
 */
class TerritoryCr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'CR';
    }

    public function paperSize()
    {
        return 'US-Letter';
    }
}
