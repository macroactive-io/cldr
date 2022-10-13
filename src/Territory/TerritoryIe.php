<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory IE - Ireland.
 * @psalm-immutable
 */
class TerritoryIe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'IE';
    }
}
