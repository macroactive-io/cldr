<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory UY - Uruguay.
 * @psalm-immutable
 */
class TerritoryUy extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'UY';
    }
}
