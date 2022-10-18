<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BF - Burkina Faso.
 * @psalm-immutable
 */
class TerritoryBf extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BF';
    }
}
