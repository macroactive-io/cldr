<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory RW - Rwanda.
 * @psalm-immutable
 */
class TerritoryRw extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'RW';
    }
}
