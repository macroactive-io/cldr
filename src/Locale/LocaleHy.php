<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageHy;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Armenian
 *
 * @psalm-immutable
 */
class LocaleHy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'հայերեն';
    }

    public function endonymSortable(): string
    {
        return 'ՀԱՅԵՐԵՆ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHy();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
