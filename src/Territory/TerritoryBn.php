<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * BN - Brunei Darussalam
 *
 * @psalm-immutable
 */
class TerritoryBn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BN';
    }
}
