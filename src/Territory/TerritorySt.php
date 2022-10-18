<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * ST - Sao Tome and Principe
 *
 * @psalm-immutable
 */
class TerritorySt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'ST';
    }
}
