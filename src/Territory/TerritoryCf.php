<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCf extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Central African Republic';
    }

    public function code(): string
    {
        return 'CF';
    }
}
