<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NI - Nicaragua.
 * @psalm-immutable
 */
class TerritoryNi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NI';
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
