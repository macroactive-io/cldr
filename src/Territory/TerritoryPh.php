<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PH - Philippines.
 * @psalm-immutable
 */
class TerritoryPh extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PH';
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
