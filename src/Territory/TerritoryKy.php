<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * KY - Cayman Islands
 *
 * @psalm-immutable
 */
class TerritoryKy extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'KY';
    }

    public function measurementSystem(): string
    {
        return 'US';
    }
}
