<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 053 - Australia and New Zealand.
 * @psalm-immutable
 */
class Territory053 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '053';
    }
}
