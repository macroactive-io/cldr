<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SG - Singapore.
 * @psalm-immutable
 */
class TerritorySg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SG';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
