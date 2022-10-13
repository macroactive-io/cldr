<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageYav;

/**
 * Class LocaleYav - Yangben
 */
class LocaleYav extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'nuasue';
    }

    public function endonymSortable()
    {
        return 'NUASUE';
    }

    public function language()
    {
        return new LanguageYav();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
