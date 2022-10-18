<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TD - Chad.
 * @psalm-immutable
 */
class TerritoryTd extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TD';
    }
}
