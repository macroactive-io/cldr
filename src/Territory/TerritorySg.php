<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/** @psalm-immutable */
class TerritorySg extends AbstractTerritory implements TerritoryInterface
{
    public function exonym(): string
    {
        return 'Singapore';
    }

    public function code(): string
    {
        return 'SG';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
