<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDyo;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleDyo - Jola-Fonyi
 * @psalm-immutable
 */
class LocaleDyo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'joola';
    }

    public function endonymSortable(): string
    {
        return 'JOOLA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDyo();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
