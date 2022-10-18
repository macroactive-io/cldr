<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageShi;
use Macroactive\Cldr\Script\ScriptDirection;

/**
 * Tachelhit
 *
 * @psalm-immutable
 */
class LocaleShi extends AbstractLocale implements LocaleInterface
{
    public function direction(): ScriptDirection
    {
        return ScriptDirection::LTR;
    }

    public function endonym(): string
    {
        return 'ⵜⴰⵛⵍⵃⵉⵜ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageShi();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
