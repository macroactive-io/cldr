<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryLr extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Liberia';
    }

    public function code(): string
    {
        return 'LR';
    }

    public function measurementSystem(): string
    {
        return 'US';
    }
}
