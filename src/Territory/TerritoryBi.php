<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BI - Burundi.
 * @psalm-immutable
 */
class TerritoryBi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BI';
    }
}
