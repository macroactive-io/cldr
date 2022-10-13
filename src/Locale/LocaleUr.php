<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageUr;

/**
 * Class LocaleUr - Urdu
 */
class LocaleUr extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'اردو';
    }

    public function language()
    {
        return new LanguageUr();
    }

    public function numberSymbols()
    {
        return [
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN,
        ];
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
