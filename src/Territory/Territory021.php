<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 021 - Northern America.
 * @psalm-immutable
 */
class Territory021 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '021';
    }
}
