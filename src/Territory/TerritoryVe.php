<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory VE - Venezuela.
 * @psalm-immutable
 */
class TerritoryVe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'VE';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function paperSize(): string
    {
        return 'US-Letter';
    }
}
