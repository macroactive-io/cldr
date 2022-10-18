<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * AT - Austria
 *
 * @psalm-immutable
 */
class TerritoryAt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AT';
    }
}
