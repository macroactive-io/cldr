<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * CP - Clipperton Island
 *
 * @psalm-immutable
 */
class TerritoryCp extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CP';
    }
}
