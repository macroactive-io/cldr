<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * NE - Niger
 *
 * @psalm-immutable
 */
class TerritoryNe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NE';
    }
}
