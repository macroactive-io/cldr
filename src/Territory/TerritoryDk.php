<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * DK - Denmark
 *
 * @psalm-immutable
 */
class TerritoryDk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'DK';
    }
}
