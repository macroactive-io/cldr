<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'San Marino';
    }

    public function code(): string
    {
        return 'SM';
    }
}
