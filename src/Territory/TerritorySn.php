<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * SN - Senegal
 *
 * @psalm-immutable
 */
class TerritorySn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SN';
    }
}
