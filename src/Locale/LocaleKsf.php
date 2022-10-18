<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKsf;

/**
 * Class LocaleKsf - Bafia
 * @psalm-immutable
 */
class LocaleKsf extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'rikpa';
    }

    public function endonymSortable(): string
    {
        return 'RIKPA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKsf();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
