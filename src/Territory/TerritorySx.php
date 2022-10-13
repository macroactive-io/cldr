<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SX - Sint Maarten (Dutch part).
 * @psalm-immutable
 */
class TerritorySx extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SX';
    }
}
