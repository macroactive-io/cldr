<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GL - Greenland.
 * @psalm-immutable
 */
class TerritoryGl extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GL';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
