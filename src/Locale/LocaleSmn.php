<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSmn;

/**
 * Class LocaleSmn - Inari Sami
 */
class LocaleSmn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'anarâškielâ';
    }

    public function endonymSortable()
    {
        return 'ANARASKIELA';
    }

    public function language()
    {
        return new LanguageSmn();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
