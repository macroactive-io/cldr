<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCd extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Congo, Democratic Republic of the';
    }

    public function code(): string
    {
        return 'CD';
    }
}
