<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageJv;

/**
 * Class LocaleJv - Javanese
 */
class LocaleJv extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Jawa';
    }

    public function language()
    {
        return new LanguageJv();
    }

    public function numberSymbols()
    {
        return [
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        ];
    }
}
