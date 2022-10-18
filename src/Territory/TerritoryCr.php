<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * CR - Costa Rica
 *
 * @psalm-immutable
 */
class TerritoryCr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CR';
    }

    public function paperSize(): string
    {
        return 'US-Letter';
    }
}
