<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBi extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Burundi';
    }

    public function code(): string
    {
        return 'BI';
    }
}
