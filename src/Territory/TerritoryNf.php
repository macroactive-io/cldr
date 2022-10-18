<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * NF - Norfolk Island
 *
 * @psalm-immutable
 */
class TerritoryNf extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NF';
    }
}
