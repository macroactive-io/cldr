<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTzm;

/**
 * Central Atlas Tamazight
 *
 * @psalm-immutable
 */
class LocaleTzm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Tamaziɣt n laṭlaṣ';
    }

    public function endonymSortable(): string
    {
        return 'TAMAZIGHT N LATLAS';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTzm();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
