<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDsb;

/**
 * Class LocaleDsb - Lower Sorbian
 */
class LocaleDsb extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'dolnoserbšćina';
    }

    public function endonymSortable()
    {
        return 'DOLNOSERBSCINA';
    }

    public function language()
    {
        return new LanguageDsb();
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
