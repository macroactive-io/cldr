<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCn extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'China';
    }

    public function code(): string
    {
        return 'CN';
    }
}
