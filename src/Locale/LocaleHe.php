<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHe;

/**
 * Class LocaleHe - Hebrew
 */
class LocaleHe extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'עברית';
    }

    public function language()
    {
        return new LanguageHe();
    }

    public function numberSymbols()
    {
        return [
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN,
        ];
    }
}
