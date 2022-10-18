<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * AZ - Azerbaijan
 *
 * @psalm-immutable
 */
class TerritoryAz extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AZ';
    }
}
