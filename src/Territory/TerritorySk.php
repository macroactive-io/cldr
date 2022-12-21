<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySk extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Slovakia';
    }

    public function code(): string
    {
        return 'SK';
    }
}
