<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory RS - Serbia.
 * @psalm-immutable
 */
class TerritoryRs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'RS';
    }
}
