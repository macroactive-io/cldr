<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageMzn;

/**
 * Mazanderani
 *
 * @psalm-immutable
 */
class LocaleMzn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'مازرونی';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMzn();
    }

    public function numerals(): array
    {
        return ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN . self::LTR_MARK,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
