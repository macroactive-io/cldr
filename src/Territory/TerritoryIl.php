<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory IL - Israel.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryIl extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'IL';
    }

    public function firstDay()
    {
        return 0;
    }

    public function weekendStart()
    {
        return 5;
    }

    public function weekendEnd()
    {
        return 6;
    }
}
