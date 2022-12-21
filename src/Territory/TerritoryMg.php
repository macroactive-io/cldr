<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMg extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Madagascar';
    }

    public function code(): string
    {
        return 'MG';
    }
}
