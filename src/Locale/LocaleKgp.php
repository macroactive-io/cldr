<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageKgp;

/**
 * Class LocaleKgp - Kaingang
 *
* @psalm-immutable
 */
class LocaleKgp extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kanhgág';
    }

    public function language(): LanguageKgp 
    {
        return new LanguageKgp();
    }

    protected function numberSymbols(): array
    {
        return array(
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        );
    }
}
