<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryIt extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Italy';
    }

    public function code(): string
    {
        return 'IT';
    }
}
