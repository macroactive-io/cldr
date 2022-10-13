<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAst;

/**
 * Class LocaleAst - Asturian
 */
class LocaleAst extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'asturianu';
    }

    public function endonymSortable()
    {
        return 'ASTURIANU';
    }

    public function language()
    {
        return new LanguageAst();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
