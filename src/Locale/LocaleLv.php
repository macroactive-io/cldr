<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLv;

/**
 * Class LocaleLv - Latvian
 */
class LocaleLv extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'latvian_ci';
    }

    public function endonym()
    {
        return 'latviešu';
    }

    public function endonymSortable()
    {
        return 'LATVIESU';
    }

    public function language()
    {
        return new LanguageLv();
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
        return 3;
    }
}
