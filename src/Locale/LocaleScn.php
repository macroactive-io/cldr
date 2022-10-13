<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageScn;

/**
 * Class LocaleScn - Sicilain
 */
class LocaleScn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Sicilianu';
    }

    public function endonymSortable()
    {
        return 'SICILIANU';
    }

    public function language()
    {
        return new LanguageScn();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
