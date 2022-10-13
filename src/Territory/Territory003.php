<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 003 - North America.
 * @psalm-immutable
 */
class Territory003 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '003';
    }
}
