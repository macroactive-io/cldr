<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * LB - Lebanon
 *
 * @psalm-immutable
 */
class TerritoryLb extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'LB';
    }
}
