<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GN - Guinea.
 * @psalm-immutable
 */
class TerritoryGn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GN';
    }
}
