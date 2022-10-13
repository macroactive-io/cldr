<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKk;

/**
 * Class LocaleKk - Kazakh
 */
class LocaleKk extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'қазақ тілі';
    }

    public function endonymSortable()
    {
        return 'ҚАЗАҚ ТІЛІ';
    }

    public function language()
    {
        return new LanguageKk();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
