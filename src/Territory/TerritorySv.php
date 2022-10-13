<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SV - El Salvador.
 */
class TerritorySv extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'SV';
    }

    public function firstDay()
    {
        return 0;
    }

    public function paperSize()
    {
        return 'US-Letter';
    }
}
