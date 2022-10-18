<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageLn;

/**
 * Class LocaleLn - Lingala
 * @psalm-immutable
 */
class LocaleLn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'lingála';
    }

    public function endonymSortable(): string
    {
        return 'LINGALA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLn();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
