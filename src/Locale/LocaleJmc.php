<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageJmc;

/**
 * Class LocaleJmc - Machame
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleJmc extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kimachame';
    }

    public function endonymSortable()
    {
        return 'KIMACHAME';
    }

    public function language()
    {
        return new LanguageJmc();
    }
}
