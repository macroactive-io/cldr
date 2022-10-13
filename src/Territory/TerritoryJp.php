<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory JP - Japan.
 * @psalm-immutable
 */
class TerritoryJp extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'JP';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
