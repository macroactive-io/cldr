<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory155 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Western Europe';
    }

    public function code(): string
    {
        return '155';
    }
}
