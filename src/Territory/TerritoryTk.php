<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TK - Tokelau.
 * @psalm-immutable
 */
class TerritoryTk extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TK';
    }
}
