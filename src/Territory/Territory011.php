<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory 011 - Western Africa.
 * @psalm-immutable
 */
class Territory011 extends AbstractTerritory implements TerritoryInterface
{
    public function code(): string
    {
        return '011';
    }
}
