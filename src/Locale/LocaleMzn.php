<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMzn;

/**
 * Class LocaleLrc - Mazanderani
 */
class LocaleMzn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'مازرونی';
    }

    public function language()
    {
        return new LanguageMzn();
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
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN . self::LTR_MARK,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
