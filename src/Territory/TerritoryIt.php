<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory IT - Italy.
 * @psalm-immutable
 */
class TerritoryIt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'IT';
    }
}
