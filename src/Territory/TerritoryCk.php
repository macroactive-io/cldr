<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CK - Cook Islands.
 * @psalm-immutable
 */
class TerritoryCk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CK';
    }
}
