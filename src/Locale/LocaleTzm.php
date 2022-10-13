<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTzm;

/**
 * Class LocaleTzm - Central Atlas Tamazight
 */
class LocaleTzm extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Tamaziɣt n laṭlaṣ';
    }

    public function endonymSortable()
    {
        return 'TAMAZIGHT N LATLAS';
    }

    public function language()
    {
        return new LanguageTzm();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
