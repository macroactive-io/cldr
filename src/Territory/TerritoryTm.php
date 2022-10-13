<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TM - Turkmenistan.
 * @psalm-immutable
 */
class TerritoryTm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TM';
    }
}
