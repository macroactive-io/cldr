<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageWae;

/**
 * Class LocaleWae - Walser
 */
class LocaleWae extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Walser';
    }

    public function endonymSortable()
    {
        return 'WALSER';
    }

    public function language()
    {
        return new LanguageWae();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::APOSTROPHE,
            self::DECIMAL => self::COMMA,
        ];
    }
}
