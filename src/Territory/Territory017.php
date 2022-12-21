<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class Territory017 extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Middle Africa';
    }

    public function code(): string
    {
        return '017';
    }
}
