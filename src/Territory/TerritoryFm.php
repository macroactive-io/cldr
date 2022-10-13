<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory FM - Federated States of Micronesia.
 * @psalm-immutable
 */
class TerritoryFm extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'FM';
    }
}
