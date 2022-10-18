<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageIt;

/**
 * Italian
 *
 * @psalm-immutable
 */
class LocaleIt extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'italiano';
    }

    public function endonymSortable(): string
    {
        return 'ITALIANO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageIt();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
