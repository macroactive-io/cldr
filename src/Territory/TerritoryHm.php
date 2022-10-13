<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory HM - Heard Island and McDonald Islands.
 * @psalm-immutable
 */
class TerritoryHm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'HM';
    }
}
