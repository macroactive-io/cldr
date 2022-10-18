<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PM - Saint Pierre and Miquelon.
 * @psalm-immutable
 */
class TerritoryPm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PM';
    }
}
