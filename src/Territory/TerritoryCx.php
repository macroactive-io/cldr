<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CX - Christmas Island.
 * @psalm-immutable
 */
class TerritoryCx extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CX';
    }
}
