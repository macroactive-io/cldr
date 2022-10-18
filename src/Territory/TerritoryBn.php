<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BN - Brunei Darussalam.
 * @psalm-immutable
 */
class TerritoryBn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BN';
    }
}
