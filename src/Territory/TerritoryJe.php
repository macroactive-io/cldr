<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory JE - Jersey.
 * @psalm-immutable
 */
class TerritoryJe extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'JE';
    }
}
