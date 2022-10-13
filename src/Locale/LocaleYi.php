<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageYi;

/**
 * Class LocaleYi - Yiddish
 */
class LocaleYi extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ייִדיש';
    }

    public function language()
    {
        return new LanguageYi();
    }
}
