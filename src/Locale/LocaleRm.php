<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageRm;

/**
 * Class LocaleRm - Romansh
 */
class LocaleRm extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'rumantsch';
    }

    public function endonymSortable()
    {
        return 'RUMANTSCH';
    }

    public function language()
    {
        return new LanguageRm();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::APOSTROPHE,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
