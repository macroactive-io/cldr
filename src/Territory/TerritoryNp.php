<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory NP - Nepal.
 */
class TerritoryNp extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'NP';
    }

    public function firstDay()
    {
        return 0;
    }
}
