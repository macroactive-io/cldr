<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNmg;

/**
 * Class LocaleNmg - Kwasio
 */
class LocaleNmg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kwasio';
    }

    public function endonymSortable()
    {
        return 'KWASIO';
    }

    public function language()
    {
        return new LanguageNmg();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
