<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * TF - French Southern Territories
 *
 * @psalm-immutable
 */
class TerritoryTf extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TF';
    }
}
