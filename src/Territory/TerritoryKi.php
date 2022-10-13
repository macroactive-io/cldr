<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KI - Kiribati.
 * @psalm-immutable
 */
class TerritoryKi extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'KI';
    }
}
