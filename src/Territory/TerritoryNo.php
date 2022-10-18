<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * NO - Norway
 *
 * @psalm-immutable
 */
class TerritoryNo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NO';
    }
}
