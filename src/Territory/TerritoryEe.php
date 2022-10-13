<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory EE - Estonia.
 * @psalm-immutable
 */
class TerritoryEe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'EE';
    }
}
