<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAr;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Arabic
 *
 * @psalm-immutable
 */
class LocaleAr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'العربية';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAr();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::ALM . self::HYPHEN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT . self::ALM;
    }
}
