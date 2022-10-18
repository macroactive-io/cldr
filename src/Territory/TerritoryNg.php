<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NG - Nigeria.
 * @psalm-immutable
 */
class TerritoryNg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NG';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
