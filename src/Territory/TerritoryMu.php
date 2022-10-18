<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MU - Mauritius.
 * @psalm-immutable
 */
class TerritoryMu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MU';
    }
}
