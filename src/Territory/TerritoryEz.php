<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory EZ - Eurozone.
 * @psalm-immutable
 */
class TerritoryEz extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'EZ';
    }
}
