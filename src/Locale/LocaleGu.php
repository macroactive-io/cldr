<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGu;

/**
 * Class LocaleGu - Gujarati
 */
class LocaleGu extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ગુજરાતી';
    }

    public function language()
    {
        return new LanguageGu();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
