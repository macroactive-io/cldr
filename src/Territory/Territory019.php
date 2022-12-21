<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory019 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Americas';
    }

    public function code(): string
    {
        return '019';
    }
}
