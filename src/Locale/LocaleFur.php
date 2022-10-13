<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFur;

/**
 * Class LocaleFur - Friulian
 */
class LocaleFur extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'furlan';
    }

    public function endonymSortable()
    {
        return 'FURLAN';
    }

    public function language()
    {
        return new LanguageFur();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
