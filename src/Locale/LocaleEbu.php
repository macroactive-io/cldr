<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEbu;

/**
 * Class LocaleEbu - Embu
 */
class LocaleEbu extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kĩembu';
    }

    public function endonymSortable()
    {
        return 'KIEMBU';
    }

    public function language()
    {
        return new LanguageEbu();
    }
}
