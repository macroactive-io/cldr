<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PG - Papua New Guinea.
 * @psalm-immutable
 */
class TerritoryPg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PG';
    }
}
