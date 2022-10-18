<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * PY - Paraguay
 *
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
