<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GQ - Equatorial Guinea.
 * @psalm-immutable
 */
class TerritoryGq extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GQ';
    }
}
