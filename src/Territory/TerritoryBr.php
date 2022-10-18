<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * BR - Brazil
 *
 * @psalm-immutable
 */
class TerritoryBr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BR';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
