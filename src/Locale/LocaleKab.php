<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKab;

/**
 * Kabyle
 *
 * @psalm-immutable
 */
class LocaleKab extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Taqbaylit';
    }

    public function endonymSortable(): string
    {
        return 'TAQBAYLIT';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKab();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
