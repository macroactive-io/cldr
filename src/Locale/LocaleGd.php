<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGd;

/**
 * Class LocaleGd - Scottish Gaelic
 */
class LocaleGd extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Gàidhlig';
    }

    public function endonymSortable()
    {
        return 'GAIDHLIG';
    }

    public function language()
    {
        return new LanguageGd();
    }
}
