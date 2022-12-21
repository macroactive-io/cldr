<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Turkmenistan';
    }

    public function code(): string
    {
        return 'TM';
    }
}
