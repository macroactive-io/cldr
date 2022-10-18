<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NE - Niger.
 * @psalm-immutable
 */
class TerritoryNe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NE';
    }
}
