<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMu extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Mauritius';
    }

    public function code(): string
    {
        return 'MU';
    }
}
