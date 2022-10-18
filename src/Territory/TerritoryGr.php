<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * GR - Greece
 *
 * @psalm-immutable
 */
class TerritoryGr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GR';
    }
}
