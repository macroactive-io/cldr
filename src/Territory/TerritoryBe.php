<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBe extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Belgium';
    }

    public function code(): string
    {
        return 'BE';
    }
}
