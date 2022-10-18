<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * IC - Canary Islands
 *
 * @psalm-immutable
 */
class TerritoryIc extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'IC';
    }
}
