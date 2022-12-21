<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritoryCx extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Christmas Island';
    }

    public function code(): string
    {
        return 'CX';
    }
}
