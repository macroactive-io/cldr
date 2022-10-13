<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSd;

/**
 * Class LocaleScn - Sindhi
 */
class LocaleSd extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'سنڌي';
    }

    public function language()
    {
        return new LanguageSd();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::ALM . self::HYPHEN,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT . self::ALM;
    }
}
