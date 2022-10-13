<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SE - Sweden.
 * @psalm-immutable
 */
class TerritorySe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SE';
    }
}
