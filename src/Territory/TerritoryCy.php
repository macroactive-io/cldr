<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCy extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Cyprus';
    }

    public function code(): string
    {
        return 'CY';
    }
}
