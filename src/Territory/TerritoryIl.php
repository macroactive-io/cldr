<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory IL - Israel.
 * @psalm-immutable
 */
class TerritoryIl extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'IL';
    }

    public function firstDay(): int
    {
        return 0;
    }

    public function weekendStart(): int
    {
        return 5;
    }

    public function weekendEnd(): int
    {
        return 6;
    }
}
