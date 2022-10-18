<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SZ - Swaziland.
 * @psalm-immutable
 */
class TerritorySz extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SZ';
    }
}
