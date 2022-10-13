<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PS - State of Palestine.
 * @psalm-immutable
 */
class TerritoryPs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PS';
    }
}
