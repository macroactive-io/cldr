<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAng;

/**
 * Class LocaleAng - Anglo-Saxon / Old-English
 */
class LocaleAng extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Ænglisc';
    }

    public function endonymSortable()
    {
        return 'ÆNGLISC';
    }

    public function language()
    {
        return new LanguageAng();
    }
}
