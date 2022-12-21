<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySi extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Slovenia';
    }

    public function code(): string
    {
        return 'SI';
    }
}
