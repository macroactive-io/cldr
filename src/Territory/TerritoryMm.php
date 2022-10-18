<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MM - Myanmar.
 * @psalm-immutable
 */
class TerritoryMm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MM';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function measurementSystem(): string
    {
        return 'US';
    }
}
