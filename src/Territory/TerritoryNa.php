<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NA - Namibia.
 * @psalm-immutable
 */
class TerritoryNa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NA';
    }
}
