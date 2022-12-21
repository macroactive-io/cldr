<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGa extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Gabon';
    }

    public function code(): string
    {
        return 'GA';
    }
}
