<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySm;

/**
 * Class LocaleItSm
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleItSm extends LocaleIt
{
    public function territory()
    {
        return new TerritorySm();
    }
}
