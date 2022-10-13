<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory FK - Falkland Islands (Malvinas).
 * @psalm-immutable
 */
class TerritoryFk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'FK';
    }
}
