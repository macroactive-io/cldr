<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSs;

/**
 * Class LocaleSs - Swati
 */
class LocaleSs extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Siswati';
    }

    public function endonymSortable()
    {
        return 'SISWATI';
    }

    public function language()
    {
        return new LanguageSs();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
