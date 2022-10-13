<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CF - Central African Republic.
 * @psalm-immutable
 */
class TerritoryCf extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CF';
    }
}
