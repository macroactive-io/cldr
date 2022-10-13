<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NO - Norway.
 * @psalm-immutable
 */
class TerritoryNo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NO';
    }
}
