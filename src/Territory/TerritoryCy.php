<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * CY - Cyprus
 *
 * @psalm-immutable
 */
class TerritoryCy extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CY';
    }
}
