<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKab;

/**
 * Class LocaleKab - Kabyle
 */
class LocaleKab extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Taqbaylit';
    }

    public function endonymSortable()
    {
        return 'TAQBAYLIT';
    }

    public function language()
    {
        return new LanguageKab();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
