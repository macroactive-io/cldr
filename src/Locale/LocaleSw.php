<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSw;

/**
 * Class LocaleSw - Swahili
 */
class LocaleSw extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kiswahili';
    }

    public function endonymSortable()
    {
        return 'KISWAHILI';
    }

    public function language()
    {
        return new LanguageSw();
    }
}
