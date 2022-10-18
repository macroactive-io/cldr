<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory ER - Eritrea.
 * @psalm-immutable
 */
class TerritoryEr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'ER';
    }

    public function firstDay(): int
    {
        return 6;
    }
}
