<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * BO - Bolivia
 *
 * @psalm-immutable
 */
class TerritoryBo extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BO';
    }
}
