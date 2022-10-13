<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 154 - Northern Europe.
 * @psalm-immutable
 */
class Territory154 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '154';
    }
}
