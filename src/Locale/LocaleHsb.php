<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHsb;

/**
 * Class LocaleHsb - Upper Sorbian
 */
class LocaleHsb extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'hornjoserbšćina';
    }

    public function endonymSortable()
    {
        return 'HORNJOSERBSCINA';
    }

    public function language()
    {
        return new LanguageHsb();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
