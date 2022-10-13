<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MD - Moldova.
 * @psalm-immutable
 */
class TerritoryMd extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MD';
    }
}
