<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNd;

/**
 * Class LocaleNd - North Ndebele
 */
class LocaleNd extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'isiNdebele';
    }

    public function endonymSortable()
    {
        return 'ISINDEBELE';
    }

    public function language()
    {
        return new LanguageNd();
    }
}
