<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * CV - Cabo Verde
 *
 * @psalm-immutable
 */
class TerritoryCv extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CV';
    }
}
