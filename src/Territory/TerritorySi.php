<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SI - Slovenia.
 * @psalm-immutable
 */
class TerritorySi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SI';
    }
}
