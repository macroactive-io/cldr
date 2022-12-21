<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySl extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Sierra Leone';
    }

    public function code(): string
    {
        return 'SL';
    }
}
