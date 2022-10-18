<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * GD - Grenada
 *
 * @psalm-immutable
 */
class TerritoryGd extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GD';
    }
}
