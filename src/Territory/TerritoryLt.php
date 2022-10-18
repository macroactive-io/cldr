<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory LT - Lithuania.
 * @psalm-immutable
 */
class TerritoryLt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'LT';
    }
}
