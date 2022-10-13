<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MR - Mauritania.
 * @psalm-immutable
 */
class TerritoryMr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MR';
    }
}
