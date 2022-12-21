<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryHn extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Honduras';
    }

    public function code(): string
    {
        return 'HN';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
