<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * GQ - Equatorial Guinea
 *
 * @psalm-immutable
 */
class TerritoryGq extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GQ';
    }
}
