<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MV - Maldives.
 * @psalm-immutable
 */
class TerritoryMv extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MV';
    }

    public function firstDay(): int
    {
        return 5;
    }
}
