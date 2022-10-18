<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * US - United States
 *
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
