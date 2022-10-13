<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TL - Timor-Leste.
 * @psalm-immutable
 */
class TerritoryTl extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TL';
    }
}
