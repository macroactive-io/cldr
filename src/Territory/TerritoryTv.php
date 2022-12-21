<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTv extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Tuvalu';
    }

    public function code(): string
    {
        return 'TV';
    }
}
