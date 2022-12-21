<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory018 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Southern Africa';
    }

    public function code(): string
    {
        return '018';
    }
}
