<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEt;

/**
 * Class LocaleEt - Estonian
 */
class LocaleEt extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'estonian_ci';
    }

    public function endonym()
    {
        return 'eesti';
    }

    public function endonymSortable()
    {
        return 'EESTI';
    }

    public function language()
    {
        return new LanguageEt();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function minimumGroupingDigits()
    {
        return 3;
    }
}
