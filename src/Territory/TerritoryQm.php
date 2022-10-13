<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory QM - Private use.
 * @psalm-immutable
 */
class TerritoryQm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'QM';
    }
}
