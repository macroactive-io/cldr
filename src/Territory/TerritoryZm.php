<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * ZM - Zambia
 *
 * @psalm-immutable
 */
class TerritoryZm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'ZM';
    }
}
