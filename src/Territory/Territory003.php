<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory003 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'North America';
    }

    public function code(): string
    {
        return '003';
    }
}
