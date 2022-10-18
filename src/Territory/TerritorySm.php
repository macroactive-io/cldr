<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SM - San Marino.
 * @psalm-immutable
 */
class TerritorySm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SM';
    }
}
