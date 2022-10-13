<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageUk;

/**
 * Class LocaleUk - Ukrainian
 */
class LocaleUk extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'українська';
    }

    public function endonymSortable()
    {
        return 'УКРАЇНСЬКА';
    }

    public function language()
    {
        return new LanguageUk();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
