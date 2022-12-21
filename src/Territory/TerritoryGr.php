<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryGr extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Greece';
    }

    public function code(): string
    {
        return 'GR';
    }
}
