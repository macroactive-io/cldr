<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 419 - Latin America and the Caribbean.
 * @psalm-immutable
 */
class Territory419 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '419';
    }
}
