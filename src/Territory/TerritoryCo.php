<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CO - Colombia.
 * @psalm-immutable
 */
class TerritoryCo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CO';
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
