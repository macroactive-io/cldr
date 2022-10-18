<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * LI - Liechtenstein
 *
 * @psalm-immutable
 */
class TerritoryLi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'LI';
    }
}
