<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MH - Marshall Islands.
 * @psalm-immutable
 */
class TerritoryMh extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MH';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
