<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePs;

/**
 * Class LocalePs - Pashto
 */
class LocalePs extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'پښتو';
    }

    public function language()
    {
        return new LanguagePs();
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
