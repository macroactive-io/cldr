<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryKm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Comoros';
    }

    public function code(): string
    {
        return 'KM';
    }
}
