<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NL - Netherlands.
 * @psalm-immutable
 */
class TerritoryNl extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'NL';
    }
}
