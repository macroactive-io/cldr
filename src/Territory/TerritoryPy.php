<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory PY - Paraguay.
 * @psalm-immutable
 */
class TerritoryPy extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PY';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
