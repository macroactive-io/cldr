<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * GE - Georgia
 *
 * @psalm-immutable
 */
class TerritoryGe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GE';
    }
}
