<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKy;

/**
 * Class LocaleKy - Kyrgyz
 */
class LocaleKy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'кыргызча';
    }

    public function endonymSortable()
    {
        return 'КЫРГЫЗЧА';
    }

    public function language()
    {
        return new LanguageKy();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
