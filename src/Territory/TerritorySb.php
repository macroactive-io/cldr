<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * SB - Solomon Islands
 *
 * @psalm-immutable
 */
class TerritorySb extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SB';
    }
}
