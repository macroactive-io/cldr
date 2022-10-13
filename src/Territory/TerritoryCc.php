<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CC - Cocos (Keeling) Islands.
 * @psalm-immutable
 */
class TerritoryCc extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CC';
    }
}
