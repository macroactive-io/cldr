<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAz;

/**
 * Class LocaleAz - Azerbaijani
 */
class LocaleAz extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'azərbaycan';
    }

    public function endonymSortable()
    {
        return 'AZERBAYCAN';
    }

    public function language()
    {
        return new LanguageAz();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
