<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryTl extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Timor-Leste';
    }

    public function code(): string
    {
        return 'TL';
    }
}
