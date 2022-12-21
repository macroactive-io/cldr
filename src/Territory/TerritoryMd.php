<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMd extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Moldova, Republic of';
    }

    public function code(): string
    {
        return 'MD';
    }
}
