<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryZa extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'South Africa';
    }

    public function code(): string
    {
        return 'ZA';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
