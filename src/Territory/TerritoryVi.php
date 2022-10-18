<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory VI - U.S. Virgin Islands.
 * @psalm-immutable
 */
class TerritoryVi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'VI';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
