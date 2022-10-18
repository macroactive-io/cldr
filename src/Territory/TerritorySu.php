<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory SU - Union of Soviet Socialist Republics.
 * @psalm-immutable
 */
class TerritorySu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'SU';
    }
}
