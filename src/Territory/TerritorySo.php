<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * SO - Somalia
 *
 * @psalm-immutable
 */
class TerritorySo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SO';
    }

    public function firstDay(): int
    {
        return 6;
    }
}
