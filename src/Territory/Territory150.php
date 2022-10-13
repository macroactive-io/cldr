<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 150 - Europe.
 * @psalm-immutable
 */
class Territory150 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '150';
    }
}
