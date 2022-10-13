<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory WF - Wallis and Futuna.
 */
class TerritoryWf extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'WF';
    }
}
