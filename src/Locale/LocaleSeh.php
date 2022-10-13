<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSeh;

/**
 * Class LocaleSeh - Sena
 */
class LocaleSeh extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'sena';
    }

    public function endonymSortable()
    {
        return 'SENA';
    }

    public function language()
    {
        return new LanguageSeh();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
