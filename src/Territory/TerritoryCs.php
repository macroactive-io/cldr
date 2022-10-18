<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * CS - Serbia and Montenegro
 *
 * @psalm-immutable
 */
class TerritoryCs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'CS';
    }
}
