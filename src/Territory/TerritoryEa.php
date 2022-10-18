<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory EA - Ceuta, Melilla.
 * @psalm-immutable
 */
class TerritoryEa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'EA';
    }
}
