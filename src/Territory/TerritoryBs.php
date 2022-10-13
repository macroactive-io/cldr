<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BS - Bahamas.
 * @psalm-immutable
 */
class TerritoryBs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BS';
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
