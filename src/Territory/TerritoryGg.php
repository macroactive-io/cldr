<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory GG - Guernsey.
 * @psalm-immutable
 */
class TerritoryGg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'GG';
    }
}
