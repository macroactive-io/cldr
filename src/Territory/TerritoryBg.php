<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * BG - Bulgaria
 *
 * @psalm-immutable
 */
class TerritoryBg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BG';
    }
}
