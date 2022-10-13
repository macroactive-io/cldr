<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory FX - Metropolitan France.
 */
class TerritoryFx extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'FX';
    }
}
