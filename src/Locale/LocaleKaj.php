<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKaj;

/**
 * Class LocaleKaj - Jju
 */
class LocaleKaj extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Jju';
    }

    public function endonymSortable()
    {
        return 'JJU';
    }

    public function language()
    {
        return new LanguageKaj();
    }
}
