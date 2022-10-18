<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NR - Nauru.
 * @psalm-immutable
 */
class TerritoryNr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NR';
    }
}
