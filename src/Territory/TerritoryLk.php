<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * LK - Sri Lanka
 *
 * @psalm-immutable
 */
class TerritoryLk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'LK';
    }
}
