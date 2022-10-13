<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TF - French Southern Territories.
 * @psalm-immutable
 */
class TerritoryTf extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TF';
    }
}
