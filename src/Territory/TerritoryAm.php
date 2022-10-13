<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AM - Armenia.
 * @psalm-immutable
 */
class TerritoryAm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AM';
    }
}
