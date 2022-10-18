<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TV - Tuvalu.
 * @psalm-immutable
 */
class TerritoryTv extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TV';
    }
}
