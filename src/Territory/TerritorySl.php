<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * SL - Sierra Leone
 *
 * @psalm-immutable
 */
class TerritorySl extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SL';
    }
}
