<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KE - Kenya.
 * @psalm-immutable
 */
class TerritoryKe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'KE';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
