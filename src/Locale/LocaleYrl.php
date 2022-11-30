<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageYrl;

/**
 * Class LocaleYrl - Nheengatu
 *
* @psalm-immutable
 */
class LocaleYrl extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'nheẽgatu';
    }

    public function language(): LanguageYrl 
    {
        return new LanguageYrl();
    }

    protected function numberSymbols(): array
    {
        return array(
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        );
    }
}
