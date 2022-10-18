<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * CW - Curaçao
 *
 * @psalm-immutable
 */
class TerritoryCw extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CW';
    }
}
