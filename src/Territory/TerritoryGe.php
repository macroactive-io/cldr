<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GE - Georgia.
 * @psalm-immutable
 */
class TerritoryGe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GE';
    }
}
