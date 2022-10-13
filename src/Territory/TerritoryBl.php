<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BL - Saint Barthélemy.
 * @psalm-immutable
 */
class TerritoryBl extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BL';
    }
}
