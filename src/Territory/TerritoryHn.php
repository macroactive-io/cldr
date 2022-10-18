<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory HN - Honduras.
 * @psalm-immutable
 */
class TerritoryHn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'HN';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
