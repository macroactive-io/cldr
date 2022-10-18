<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * VC - Saint Vincent and the Grenadines
 *
 * @psalm-immutable
 */
class TerritoryVc extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'VC';
    }
}
