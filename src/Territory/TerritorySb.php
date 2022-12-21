<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySb extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Solomon Islands';
    }

    public function code(): string
    {
        return 'SB';
    }
}
