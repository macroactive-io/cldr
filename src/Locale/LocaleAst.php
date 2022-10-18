<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAst;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleAst - Asturian
 * @psalm-immutable
 */
class LocaleAst extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'asturianu';
    }

    public function endonymSortable(): string
    {
        return 'ASTURIANU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAst();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
