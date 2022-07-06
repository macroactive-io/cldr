<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTl;

/**
 * Class LocaleTl - Tagalog
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
 */
class LocaleTl extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Tagalog';
    }

    public function endonymSortable()
    {
        return 'TAGALOG';
    }

    public function language()
    {
        return new LanguageTl();
    }
}
