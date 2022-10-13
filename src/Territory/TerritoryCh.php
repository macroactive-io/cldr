<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CH - Switzerland.
 * @psalm-immutable
 */
class TerritoryCh extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CH';
    }
}
