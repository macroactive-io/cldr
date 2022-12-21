<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory013 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Central America';
    }

    public function code(): string
    {
        return '013';
    }
}
