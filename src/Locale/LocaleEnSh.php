<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySh;

/**
 * Class LocaleEnSh
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnSh extends LocaleEn
{
    public function territory()
    {
        return new TerritorySh();
    }
}
