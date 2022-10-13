<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDyo;

/**
 * Class LocaleDyo - Jola-Fonyi
 */
class LocaleDyo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'joola';
    }

    public function endonymSortable()
    {
        return 'JOOLA';
    }

    public function language()
    {
        return new LanguageDyo();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
