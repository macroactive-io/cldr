<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory LK - Sri Lanka.
 * @psalm-immutable
 */
class TerritoryLk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'LK';
    }
}
