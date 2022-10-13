<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory EU - European Union.
 * @psalm-immutable
 */
class TerritoryEu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'EU';
    }
}
