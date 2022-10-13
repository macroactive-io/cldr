<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NU - Niue.
 * @psalm-immutable
 */
class TerritoryNu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NU';
    }
}
