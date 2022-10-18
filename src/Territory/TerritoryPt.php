<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PT - Portugal.
 * @psalm-immutable
 */
class TerritoryPt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PT';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
