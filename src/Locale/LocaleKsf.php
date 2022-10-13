<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKsf;

/**
 * Class LocaleKsf - Bafia
 */
class LocaleKsf extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'rikpa';
    }

    public function endonymSortable()
    {
        return 'RIKPA';
    }

    public function language()
    {
        return new LanguageKsf();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
