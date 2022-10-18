<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * BL - Saint Barthélemy
 *
 * @psalm-immutable
 */
class TerritoryBl extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BL';
    }
}
