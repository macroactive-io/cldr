<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFf;

/**
 * Class LocaleFf - Fulah
 */
class LocaleFf extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Pulaar';
    }

    public function endonymSortable()
    {
        return 'PULAAR';
    }

    public function language()
    {
        return new LanguageFf();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
