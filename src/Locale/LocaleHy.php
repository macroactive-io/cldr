<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHy;

/**
 * Class LocaleHy - Armenian
 */
class LocaleHy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'հայերեն';
    }

    public function endonymSortable()
    {
        return 'ՀԱՅԵՐԵՆ';
    }

    public function language()
    {
        return new LanguageHy();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
