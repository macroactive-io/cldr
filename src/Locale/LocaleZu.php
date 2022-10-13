<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageZu;

/**
 * Class LocaleZu - Zulu
 */
class LocaleZu extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'isiZulu';
    }

    public function endonymSortable()
    {
        return 'ISIZULU';
    }

    public function language()
    {
        return new LanguageZu();
    }
}
