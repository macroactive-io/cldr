<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMua;

/**
 * Class LocaleMua - Mundang
 */
class LocaleMua extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'MUNDAŊ';
    }

    public function endonymSortable()
    {
        return 'MUNDAN';
    }

    public function language()
    {
        return new LanguageMua();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
