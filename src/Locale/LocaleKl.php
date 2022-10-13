<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKl;

/**
 * Class LocaleKl - Kalaallisut
 */
class LocaleKl extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'kalaallisut';
    }

    public function endonymSortable()
    {
        return 'KALAALLISUT';
    }

    public function language()
    {
        return new LanguageKl();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::DOT,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
