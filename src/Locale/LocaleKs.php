<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKs;

/**
 * Class LocaleKs - Kashmiri
 */
class LocaleKs extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'کٲشُر';
    }

    public function language()
    {
        return new LanguageKs();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN . self::LTR_MARK,
        ];
    }

    protected function digitsGroup()
    {
        return 2;
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
