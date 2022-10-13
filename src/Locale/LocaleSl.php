<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSl;

/**
 * Class LocaleSl - Slovenian
 */
class LocaleSl extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'slovenian_ci';
    }

    public function endonym()
    {
        return 'slovenščina';
    }

    public function endonymSortable()
    {
        return 'SLOVENSCINA';
    }

    public function language()
    {
        return new LanguageSl();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::DOT,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    public function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
