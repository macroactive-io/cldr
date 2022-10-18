<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Territory;

/**
 * Class AbstractTerritory - Representation of the territory TC - Turks and Caicos Islands.
 * @psalm-immutable
 */
class TerritoryTc extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return 'TC';
    }
}
