<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SJ - Svalbard and Jan Mayen.
 * @psalm-immutable
 */
class TerritorySj extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SJ';
    }
}
