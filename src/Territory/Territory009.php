<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory009 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Oceania';
    }

    public function code(): string
    {
        return '009';
    }
}
