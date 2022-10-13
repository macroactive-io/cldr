<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 202 - Sub-Saharan Africa.
 * @psalm-immutable
 */
class Territory202 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '202';
    }
}
