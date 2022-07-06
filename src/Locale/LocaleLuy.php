<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLuy;

/**
 * Class LocaleLuy - Luyia
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleLuy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Luluhia';
    }

    public function endonymSortable()
    {
        return 'LULUHIA';
    }

    public function language()
    {
        return new LanguageLuy();
    }
}
