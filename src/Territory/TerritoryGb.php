<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGb extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'United Kingdom of Great Britain and Northern Ireland';
    }

    public function code(): string
    {
        return 'GB';
    }

    public function measurementSystem(): string
    {
        return 'UK';
    }
}
