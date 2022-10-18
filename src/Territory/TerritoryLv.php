<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory LV - Latvia.
 * @psalm-immutable
 */
class TerritoryLv extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'LV';
    }
}
