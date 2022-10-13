<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ME - Montenegro.
 * @psalm-immutable
 */
class TerritoryMe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'ME';
    }
}
