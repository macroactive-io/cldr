<?php

namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory RS - Serbia.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class TerritoryRs extends AbstractTerritory implements TerritoryInterface
{
    public function code()
    {
        return 'RS';
    }
}
