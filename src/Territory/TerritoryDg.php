<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory DG - Diego Garcia.
 * @psalm-immutable
 */
class TerritoryDg extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'DG';
    }
}
