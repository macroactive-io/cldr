<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TT - Trinidad and Tobago.
 * @psalm-immutable
 */
class TerritoryTt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TT';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
