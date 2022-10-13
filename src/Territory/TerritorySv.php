<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SV - El Salvador.
 * @psalm-immutable
 */
class TerritorySv extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SV';
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
