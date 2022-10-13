<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory IR - Islamic Republic of Iran.
 * @psalm-immutable
 */
class TerritoryIr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'IR';
    }

    public function firstDay(): int
    {
        return 6;
    }

    public function weekendStart(): int
    {
        return 5;
    }

    public function weekendEnd(): int
    {
        return 5;
    }
}
