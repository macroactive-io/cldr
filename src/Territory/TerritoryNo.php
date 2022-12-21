<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryNo extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Norway';
    }

    public function code(): string
    {
        return 'NO';
    }
}
