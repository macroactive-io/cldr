<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryUs;

/**
 * Class LocaleEnUs - American English
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleEnUs extends LocaleEn
{
    public function endonym()
    {
        return 'American English';
    }

    public function endonymSortable()
    {
        return 'ENGLISH, AMERICAN';
    }

    public function territory()
    {
        return new TerritoryUs();
    }
}
