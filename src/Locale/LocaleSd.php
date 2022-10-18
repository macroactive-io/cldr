<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSd;

/**
 * Sindhi
 *
 * @psalm-immutable
 */
class LocaleSd extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'سنڌي';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSd();
    }

    public function numberSymbols(): array
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
