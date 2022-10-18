<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BT - Bhutan.
 * @psalm-immutable
 */
class TerritoryBt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BT';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
