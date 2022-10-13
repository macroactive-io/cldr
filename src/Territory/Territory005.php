<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 005 - South America.
 * @psalm-immutable
 */
class Territory005 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '005';
    }
}
