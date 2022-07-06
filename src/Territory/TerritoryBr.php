<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory BR - Brazil.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryBr extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'BR';
    }

    public function firstDay()
    {
        return 0;
    }
}
