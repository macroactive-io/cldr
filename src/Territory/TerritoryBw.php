<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BW - Botswana.
 * @psalm-immutable
 */
class TerritoryBw extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BW';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
