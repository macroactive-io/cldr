<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BA - Bosnia and Herzegovina.
 * @psalm-immutable
 */
class TerritoryBa extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'BA';
    }
}
