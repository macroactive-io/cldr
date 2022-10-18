<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * FR - France
 *
 * @psalm-immutable
 */
class TerritoryFr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'FR';
    }
}
