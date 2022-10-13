<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PA - Panama.
 * @psalm-immutable
 */
class TerritoryPa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PA';
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
