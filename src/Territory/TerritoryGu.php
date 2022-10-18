<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * GU - Guam
 *
 * @psalm-immutable
 */
class TerritoryGu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GU';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
