<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BJ - Benin.
 * @psalm-immutable
 */
class TerritoryBj extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BJ';
    }
}
