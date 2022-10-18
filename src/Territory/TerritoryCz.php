<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * CZ - Czech Republic
 *
 * @psalm-immutable
 */
class TerritoryCz extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CZ';
    }
}
