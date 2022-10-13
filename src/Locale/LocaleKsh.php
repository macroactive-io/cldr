<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKsh;

/**
 * Class LocaleKsh - Colognian
 */
class LocaleKsh extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kölsch';
    }

    public function endonymSortable()
    {
        return 'KOLSCH';
    }

    public function language()
    {
        return new LanguageKsh();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
