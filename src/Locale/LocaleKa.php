<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKa;

/**
 * Class LocaleKa - Georgian
 */
class LocaleKa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ქართული';
    }

    public function language()
    {
        return new LanguageKa();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function minimumGroupingDigits()
    {
        return 2;
    }
}
