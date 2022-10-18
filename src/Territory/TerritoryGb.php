<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * GB - United Kingdom
 *
 * @psalm-immutable
 */
class TerritoryGb extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GB';
    }

    public function measurementSystem(): string
    {
        return 'UK';
    }
}
