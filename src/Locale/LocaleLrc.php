<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLrc;

/**
 * Class LocaleLrc - Luri
 */
class LocaleLrc extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'لۊری شومالی';
    }

    public function language()
    {
        return new LanguageLrc();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN . self::LTR_MARK,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
