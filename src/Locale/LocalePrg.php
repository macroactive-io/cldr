<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePrg;

/**
 * Class LocalePrg - Old Prussian
 */
class LocalePrg extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'latvian_ci';
    }

    public function endonym()
    {
        return 'prūsiskan';
    }

    public function endonymSortable()
    {
        return 'PRŪSISKAN';
    }

    public function language()
    {
        return new LanguagePrg();
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
