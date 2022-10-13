<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SB - Solomon Islands.
 * @psalm-immutable
 */
class TerritorySb extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SB';
    }
}
