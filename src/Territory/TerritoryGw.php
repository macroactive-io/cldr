<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GW - Guinea-Bissau.
 * @psalm-immutable
 */
class TerritoryGw extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GW';
    }
}
