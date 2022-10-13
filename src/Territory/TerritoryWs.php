<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory WS - Samoa.
 * @psalm-immutable
 */
class TerritoryWs extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'WS';
    }

    public function firstDay(): int
    {
        return 0;
    }
}
