<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory YT - Mayotte.
 * @psalm-immutable
 */
class TerritoryYt extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'YT';
    }
}
