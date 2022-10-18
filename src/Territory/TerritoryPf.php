<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * PF - French Polynesia
 *
 * @psalm-immutable
 */
class TerritoryPf extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'PF';
    }
}
