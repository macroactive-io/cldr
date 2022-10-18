<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * VI - US. Virgin Islands.
 *
 * @psalm-immutable
 */
class TerritoryVi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'VI';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
