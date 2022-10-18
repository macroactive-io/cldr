<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory UN - United Nations.
 * @psalm-immutable
 */
class TerritoryUn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'UN';
    }
}
