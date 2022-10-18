<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * YU - Yugoslavia
 *
 * @psalm-immutable
 */
class TerritoryYu extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'YU';
    }
}
