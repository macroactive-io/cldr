<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryPs extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Palestine, State of';
    }

    public function code(): string
    {
        return 'PS';
    }
}
