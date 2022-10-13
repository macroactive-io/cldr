<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 039 - Southern Europe.
 * @psalm-immutable
 */
class Territory039 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '039';
    }
}
