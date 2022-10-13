<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 018 - Southern Africa.
 * @psalm-immutable
 */
class Territory018 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '018';
    }
}
