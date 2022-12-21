<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory002 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Africa';
    }

    public function code(): string
    {
        return '002';
    }
}
