<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * BB - Barbados
 *
 * @psalm-immutable
 */
class TerritoryBb extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BB';
    }
}
