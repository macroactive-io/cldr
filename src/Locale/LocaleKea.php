<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKea;

/**
 * Class LocaleKea - Kabuverdianu
 * @psalm-immutable
 */
class LocaleKea extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kabuverdianu';
    }

    public function endonymSortable(): string
    {
        return 'KABUVERDIANU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKea();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
