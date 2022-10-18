<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory LU - Luxembourg.
 * @psalm-immutable
 */
class TerritoryLu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'LU';
    }
}
