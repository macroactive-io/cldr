<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageFa;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleFa - Persian
 * @psalm-immutable
 */
class LocaleFa extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'persian_ci';
    }

    public function endonym(): string
    {
        return 'فارسی';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFa();
    }

    public function numerals(): array
    {
        return ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::LTR_MARK . self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
