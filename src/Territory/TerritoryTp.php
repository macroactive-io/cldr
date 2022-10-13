<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TP - East Timor.
 * @psalm-immutable
 */
class TerritoryTp extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TP';
    }
}
