<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSd;

/**
 * Class LocaleScn - Sindhi
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
