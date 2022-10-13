<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory UM - United States Minor Outlying Islands.
 * @psalm-immutable
 */
class TerritoryUm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'UM';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
