<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryKy extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Cayman Islands';
    }

    public function code(): string
    {
        return 'KY';
    }

    public function measurementSystem(): string
    {
        return 'US';
    }
}
