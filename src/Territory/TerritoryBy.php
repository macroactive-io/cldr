<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryBy extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Belarus';
    }

    public function code(): string
    {
        return 'BY';
    }
}
