<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory HR - Croatia.
 * @psalm-immutable
 */
class TerritoryHr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'HR';
    }
}
