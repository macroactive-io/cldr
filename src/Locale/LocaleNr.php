<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNr;

/**
 * Class LocaleNr - South Ndebele
 */
class LocaleNr extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'isiNdebele';
    }

    public function endonymSortable()
    {
        return 'ISINDEBELE';
    }

    public function language()
    {
        return new LanguageNr();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
