<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * MC - Monaco
 *
 * @psalm-immutable
 */
class TerritoryMc extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MC';
    }
}
