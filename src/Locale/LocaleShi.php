<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageShi;

/**
 * Class LocaleShi - Tachelhit
 */
class LocaleShi extends AbstractLocale implements LocaleInterface
{
    public function direction()
    {
        return 'ltr';
    }

    public function endonym()
    {
        return 'ⵜⴰⵛⵍⵃⵉⵜ';
    }

    public function language()
    {
        return new LanguageShi();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
