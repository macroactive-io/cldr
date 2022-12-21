<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBg extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Bulgaria';
    }

    public function code(): string
    {
        return 'BG';
    }
}
