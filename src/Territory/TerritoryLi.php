<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory LI - Liechtenstein.
 * @psalm-immutable
 */
class TerritoryLi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'LI';
    }
}
