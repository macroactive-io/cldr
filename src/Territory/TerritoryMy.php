<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MY - Malaysia.
 * @psalm-immutable
 */
class TerritoryMy extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MY';
    }
}
