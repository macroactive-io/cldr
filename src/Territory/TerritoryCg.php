<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCg extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Congo';
    }

    public function code(): string
    {
        return 'CG';
    }
}
