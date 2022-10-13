<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GM - Gambia.
 * @psalm-immutable
 */
class TerritoryGm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GM';
    }
}
