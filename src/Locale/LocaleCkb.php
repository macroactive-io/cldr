<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCkb;

/**
 * Class LocaleCkb - Sorani
 */
class LocaleCkb extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'کوردیی ناوەندی';
    }

    public function language()
    {
        return new LanguageCkb();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::RTL_MARK . self::HYPHEN,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
