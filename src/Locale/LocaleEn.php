<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEn;

/**
 * Class LocaleEn - English
 */
class LocaleEn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'English';
    }

    public function endonymSortable()
    {
        return 'ENGLISH';
    }

    public function language()
    {
        return new LanguageEn();
    }
}
