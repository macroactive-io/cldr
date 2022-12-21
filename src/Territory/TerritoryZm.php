<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryZm extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Zambia';
    }

    public function code(): string
    {
        return 'ZM';
    }
}
