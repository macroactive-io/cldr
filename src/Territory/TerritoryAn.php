<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AN - Netherlands Antilles.
 * @psalm-immutable
 */
class TerritoryAn extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AN';
    }
}
