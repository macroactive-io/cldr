<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKsb;

/**
 * Class LocaleKsb - Shambala
 */
class LocaleKsb extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kishambaa';
    }

    public function endonymSortable()
    {
        return 'KISHAMBAA';
    }

    public function language()
    {
        return new LanguageKsb();
    }
}
