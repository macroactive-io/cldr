<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * BZ - Belize
 *
 * @psalm-immutable
 */
class TerritoryBz extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BZ';
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
