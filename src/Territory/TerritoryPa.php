<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PA - Panama.
 */
class TerritoryPa extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'PA';
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
