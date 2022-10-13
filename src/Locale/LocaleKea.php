<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKea;

/**
 * Class LocaleKea - Kabuverdianu
 */
class LocaleKea extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'kabuverdianu';
    }

    public function endonymSortable()
    {
        return 'KABUVERDIANU';
    }

    public function language()
    {
        return new LanguageKea();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
