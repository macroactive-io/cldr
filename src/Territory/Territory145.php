<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory145 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Western Asia';
    }

    public function code(): string
    {
        return '145';
    }
}
