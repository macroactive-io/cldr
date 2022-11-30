<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageVec;

/**
 * Class LocaleVec - Venetian
 *
* @psalm-immutable
 */
class LocaleVec extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'veneto';
    }

    public function endonymSortable(): string
    {
        return 'VENETO';
    }

    public function language(): LanguageVec 
    {
        return new LanguageVec();
    }

    protected function numberSymbols(): array
    {
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
