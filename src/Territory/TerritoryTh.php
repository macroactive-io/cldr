<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TH - Thailand.
 * @psalm-immutable
 */
class TerritoryTh extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TH';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
