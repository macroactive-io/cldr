<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFo;

/**
 * Class LocaleFo - Faroese
 */
class LocaleFo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'føroyskt';
    }

    public function endonymSortable()
    {
        return 'FOROYSKT';
    }

    public function language()
    {
        return new LanguageFo();
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
