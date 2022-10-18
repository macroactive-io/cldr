<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * IS - Iceland
 *
 * @psalm-immutable
 */
class TerritoryIs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'IS';
    }
}
