<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * ME - Montenegro
 *
 * @psalm-immutable
 */
class TerritoryMe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'ME';
    }
}
