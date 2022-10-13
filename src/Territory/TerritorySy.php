<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SY - Syrian Arab Republic.
 * @psalm-immutable
 */
class TerritorySy extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SY';
    }

    public function firstDay(): int
    {
        return 6;
    }

    public function weekendStart(): int
    {
        return 5;
    }

    public function weekendEnd(): int
    {
        return 6;
    }
}
