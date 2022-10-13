<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory LB - Lebanon.
 * @psalm-immutable
 */
class TerritoryLb extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'LB';
    }
}
