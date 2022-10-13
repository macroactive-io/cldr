<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNnh;

/**
 * Class LocaleNnh - Ngiemboon
 */
class LocaleNnh extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Shwóŋò ngiembɔɔn';
    }

    public function endonymSortable()
    {
        return 'SHWONO NGIEMBOON';
    }

    public function language()
    {
        return new LanguageNnh();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
