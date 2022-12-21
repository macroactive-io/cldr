<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryMn extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Mongolia';
    }

    public function code(): string
    {
        return 'MN';
    }
}
