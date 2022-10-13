<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHa;

/**
 * Class LocaleHa - Hausa
 */
class LocaleHa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Hausa';
    }

    public function endonymSortable()
    {
        return 'HAUSA';
    }

    public function language()
    {
        return new LanguageHa();
    }
}
