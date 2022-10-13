<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NF - Norfolk Island.
 * @psalm-immutable
 */
class TerritoryNf extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NF';
    }
}
