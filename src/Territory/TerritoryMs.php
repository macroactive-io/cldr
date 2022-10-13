<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MS - Montserrat.
 * @psalm-immutable
 */
class TerritoryMs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MS';
    }
}
