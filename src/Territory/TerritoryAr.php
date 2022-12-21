<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryAr extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Argentina';
    }

    public function code(): string
    {
        return 'AR';
    }

    public function firstDay(): int
    {
        return 1;
    }
}
