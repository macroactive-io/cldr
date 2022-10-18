<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ID - Indonesia.
 * @psalm-immutable
 */
class TerritoryId extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'ID';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
