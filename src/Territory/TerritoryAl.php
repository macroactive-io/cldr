<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AL - Albania.
 * @psalm-immutable
 */
class TerritoryAl extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AL';
    }
}
