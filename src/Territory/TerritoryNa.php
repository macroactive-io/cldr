<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryNa extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Namibia';
    }

    public function code(): string
    {
        return 'NA';
    }
}
