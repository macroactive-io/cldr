<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * LS - Lesotho
 *
 * @psalm-immutable
 */
class TerritoryLs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'LS';
    }
}
