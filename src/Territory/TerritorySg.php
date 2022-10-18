<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * SG - Singapore
 *
 * @psalm-immutable
 */
class TerritorySg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SG';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
