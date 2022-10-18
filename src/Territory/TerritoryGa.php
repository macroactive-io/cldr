<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GA - Gabon.
 * @psalm-immutable
 */
class TerritoryGa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GA';
    }
}
