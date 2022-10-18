<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSmn;

/**
 * Inari Sami
 *
 * @psalm-immutable
 */
class LocaleSmn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'anarâškielâ';
    }

    public function endonymSortable(): string
    {
        return 'ANARASKIELA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSmn();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
