<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * VA - Holy See (Vatican City State)
 *
 * @psalm-immutable
 */
class TerritoryVa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'VA';
    }
}
