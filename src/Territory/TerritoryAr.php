<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AR - Argentina.
 * @psalm-immutable
 */
class TerritoryAr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AR';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
