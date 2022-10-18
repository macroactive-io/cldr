<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * HR - Croatia
 *
 * @psalm-immutable
 */
class TerritoryHr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'HR';
    }
}
