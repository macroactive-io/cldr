<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageJgo;

/**
 * Class LocaleJgo - Ngomba
 */
class LocaleJgo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Ndaꞌa';
    }

    public function endonymSortable()
    {
        return 'NDAA';
    }

    public function language()
    {
        return new LanguageJgo();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
