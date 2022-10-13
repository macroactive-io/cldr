<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory UA - Ukraine.
 * @psalm-immutable
 */
class TerritoryUa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'UA';
    }
}
