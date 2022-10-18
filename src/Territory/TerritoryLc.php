<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * LC - Saint Lucia
 *
 * @psalm-immutable
 */
class TerritoryLc extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'LC';
    }
}
