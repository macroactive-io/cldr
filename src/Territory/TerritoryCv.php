<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CV - Cabo Verde.
 * @psalm-immutable
 */
class TerritoryCv extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CV';
    }
}
