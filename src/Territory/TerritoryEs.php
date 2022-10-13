<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ES - Spain.
 * @psalm-immutable
 */
class TerritoryEs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'ES';
    }
}
