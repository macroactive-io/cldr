<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySu extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Union of Soviet Socialist Republics';
    }

    public function code(): string
    {
        return 'SU';
    }
}
