<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIa;

/**
 * Class LocaleIa - Interlingua
 */
class LocaleIa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'interlingua';
    }

    public function endonymSortable()
    {
        return 'INTERLINGUA';
    }

    public function language()
    {
        return new LanguageIa();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
