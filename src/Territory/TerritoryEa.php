<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryEa extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Ceuta, Melilla';
    }

    public function code(): string
    {
        return 'EA';
    }
}
