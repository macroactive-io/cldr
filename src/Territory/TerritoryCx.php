<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * CX - Christmas Island
 *
 * @psalm-immutable
 */
class TerritoryCx extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CX';
    }
}
