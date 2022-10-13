<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 034 - Southern Asia.
 * @psalm-immutable
 */
class Territory034 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '034';
    }
}
