<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * SI - Slovenia
 *
 * @psalm-immutable
 */
class TerritorySi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SI';
    }
}
