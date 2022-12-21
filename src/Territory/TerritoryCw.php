<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCw extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Curaçao';
    }

    public function code(): string
    {
        return 'CW';
    }
}
