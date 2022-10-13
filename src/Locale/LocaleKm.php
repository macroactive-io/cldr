<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKm;

/**
 * Class LocaleKm - Khmer
 */
class LocaleKm extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ខ្មែរ';
    }

    public function language()
    {
        return new LanguageKm();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
