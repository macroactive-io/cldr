<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory EC - Ecuador.
 * @psalm-immutable
 */
class TerritoryEc extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'EC';
    }
}
