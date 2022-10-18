<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NC - New Caledonia.
 * @psalm-immutable
 */
class TerritoryNc extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NC';
    }
}
