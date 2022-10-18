<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * TM - Turkmenistan
 *
 * @psalm-immutable
 */
class TerritoryTm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TM';
    }
}
