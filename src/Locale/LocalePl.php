<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePl;

/**
 * Class LocalePl - Polish
 */
class LocalePl extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'polish_ci';
    }

    public function endonym()
    {
        return 'polski';
    }

    public function endonymSortable()
    {
        return 'POLSKI';
    }

    public function language()
    {
        return new LanguagePl();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function minimumGroupingDigits()
    {
        return 2;
    }
}
