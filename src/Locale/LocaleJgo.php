<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageJgo;

/**
 * Class LocaleJgo - Ngomba
 * @psalm-immutable
 */
class LocaleJgo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ndaꞌa';
    }

    public function endonymSortable(): string
    {
        return 'NDAA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageJgo();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
