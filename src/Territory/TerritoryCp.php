<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCp extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Clipperton Island';
    }

    public function code(): string
    {
        return 'CP';
    }
}
