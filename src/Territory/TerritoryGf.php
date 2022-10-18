<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GF - French Guiana.
 * @psalm-immutable
 */
class TerritoryGf extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GF';
    }
}
