<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * TL - Timor-Leste
 *
 * @psalm-immutable
 */
class TerritoryTl extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TL';
    }
}
