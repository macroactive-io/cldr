<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 014 - Eastern Africa.
 * @psalm-immutable
 */
class Territory014 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '014';
    }
}
