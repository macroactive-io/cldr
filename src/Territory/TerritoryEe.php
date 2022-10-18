<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * EE - Estonia
 *
 * @psalm-immutable
 */
class TerritoryEe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'EE';
    }
}
