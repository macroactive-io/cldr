<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGl;

/**
 * Class LocaleGl - Galician
 */
class LocaleGl extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'galego';
    }

    public function endonymSortable()
    {
        return 'GALEGO';
    }

    public function language()
    {
        return new LanguageGl();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
