<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * CN - China
 *
 * @psalm-immutable
 */
class TerritoryCn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CN';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
