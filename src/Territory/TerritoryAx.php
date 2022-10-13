<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory AX - Åland Islands.
 * @psalm-immutable
 */
class TerritoryAx extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'AX';
    }
}
