<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AD - Andorra.
 * @psalm-immutable
 */
class TerritoryAd extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AD';
    }
}
