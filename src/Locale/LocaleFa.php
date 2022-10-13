<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFa;

/**
 * Class LocaleFa - Persian
 */
class LocaleFa extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'persian_ci';
    }

    public function endonym()
    {
        return 'فارسی';
    }

    public function language()
    {
        return new LanguageFa();
    }

    public function numerals()
    {
        return ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::LTR_MARK . self::MINUS_SIGN,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
