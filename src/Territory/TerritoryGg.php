<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * GG - Guernsey
 *
 * @psalm-immutable
 */
class TerritoryGg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GG';
    }
}
