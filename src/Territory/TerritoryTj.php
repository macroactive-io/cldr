<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TJ - Tajikistan.
 * @psalm-immutable
 */
class TerritoryTj extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TJ';
    }
}
