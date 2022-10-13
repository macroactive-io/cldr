<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory MQ - Martinique.
 * @psalm-immutable
 */
class TerritoryMq extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'MQ';
    }
}
