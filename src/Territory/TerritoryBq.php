<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BQ - Bonaire, Sint Eustatius and Saba.
 * @psalm-immutable
 */
class TerritoryBq extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BQ';
    }
}
