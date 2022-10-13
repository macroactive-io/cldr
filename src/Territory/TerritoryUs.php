<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory US - United States.
 * @psalm-immutable
 */
class TerritoryUs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'US';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function measurementSystem(): string
    {
        return 'US';
    }

    public function paperSize(): string
    {
        return 'US-Letter';
    }
}
