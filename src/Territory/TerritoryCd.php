<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory CD - The Democratic Republic of the Congo.
 * @psalm-immutable
 */
class TerritoryCd extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CD';
    }
}
