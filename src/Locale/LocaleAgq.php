<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAgq;

/**
 * Class LocaleAgq - Aghem
 */
class LocaleAgq extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Aghem';
    }

    public function endonymSortable()
    {
        return 'AGHEM';
    }

    public function language()
    {
        return new LanguageAgq();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
