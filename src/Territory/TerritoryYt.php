<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * YT - Mayotte
 *
 * @psalm-immutable
 */
class TerritoryYt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'YT';
    }
}
