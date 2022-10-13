<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AF - Afghanistan.
 * @psalm-immutable
 */
class TerritoryAf extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AF';
    }

    public function firstDay(): int
    {
        return 6;
    }

    public function weekendStart(): int
    {
        return 4;
    }

    public function weekendEnd(): int
    {
        return 5;
    }
}
