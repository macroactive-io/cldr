<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CM - Cameroon.
 * @psalm-immutable
 */
class TerritoryCm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CM';
    }
}
