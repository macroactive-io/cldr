<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySx extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Sint Maarten (Dutch part)';
    }

    public function code(): string
    {
        return 'SX';
    }
}
