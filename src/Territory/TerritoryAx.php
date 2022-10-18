<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * AX - Åland Islands
 *
 * @psalm-immutable
 */
class TerritoryAx extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AX';
    }
}
