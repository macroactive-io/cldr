<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGi;

/**
 * Class LocaleEnGi
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnGi extends LocaleEn
{
    public function territory()
    {
        return new TerritoryGi();
    }
}
