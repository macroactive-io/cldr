<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BU - Burma.
 * @psalm-immutable
 */
class TerritoryBu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BU';
    }
}
