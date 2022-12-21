<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryLv extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Latvia';
    }

    public function code(): string
    {
        return 'LV';
    }
}
