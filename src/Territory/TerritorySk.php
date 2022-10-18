<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * SK - Slovakia
 *
 * @psalm-immutable
 */
class TerritorySk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SK';
    }
}
