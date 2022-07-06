<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryVi;

/**
 * Class LocaleEnVi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnVi extends LocaleEn
{
    public function territory()
    {
        return new TerritoryVi();
    }
}
