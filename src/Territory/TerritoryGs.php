<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * GS - South Georgia and the South Sandwich Islands
 *
 * @psalm-immutable
 */
class TerritoryGs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GS';
    }
}
