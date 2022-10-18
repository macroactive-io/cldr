<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PE - Peru.
 * @psalm-immutable
 */
class TerritoryPe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PE';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
