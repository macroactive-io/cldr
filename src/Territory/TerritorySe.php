<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Sweden';
    }

    public function code(): string
    {
        return 'SE';
    }
}
