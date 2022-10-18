<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * FK - Falkland Islands (Malvinas)
 *
 * @psalm-immutable
 */
class TerritoryFk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'FK';
    }
}
