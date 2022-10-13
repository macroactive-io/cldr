<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory FR - France.
 * @psalm-immutable
 */
class TerritoryFr extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'FR';
    }
}
