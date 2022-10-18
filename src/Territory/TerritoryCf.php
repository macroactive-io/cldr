<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

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
