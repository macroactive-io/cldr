<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory RE - Réunion.
 * @psalm-immutable
 */
class TerritoryRe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'RE';
    }
}
