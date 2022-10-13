<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AI - Anguilla.
 */
class TerritoryAi extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'AI';
    }
}
