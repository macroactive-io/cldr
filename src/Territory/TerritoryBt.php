<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBt extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Bhutan';
    }

    public function code(): string
    {
        return 'BT';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
