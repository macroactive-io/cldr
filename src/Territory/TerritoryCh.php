<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCh extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Switzerland';
    }

    public function code(): string
    {
        return 'CH';
    }
}
