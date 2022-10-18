<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BM - Bermuda.
 * @psalm-immutable
 */
class TerritoryBm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BM';
    }
}
