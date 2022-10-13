<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MC - Monaco.
 * @psalm-immutable
 */
class TerritoryMc extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MC';
    }
}
