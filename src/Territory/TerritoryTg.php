<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * TG - Togo
 *
 * @psalm-immutable
 */
class TerritoryTg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TG';
    }
}
