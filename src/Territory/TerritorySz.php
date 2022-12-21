<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySz extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Eswatini';
    }

    public function code(): string
    {
        return 'SZ';
    }
}
