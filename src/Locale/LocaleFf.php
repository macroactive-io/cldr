<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageFf;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Fulah
 *
 * @psalm-immutable
 */
class LocaleFf extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Pulaar';
    }

    public function endonymSortable(): string
    {
        return 'PULAAR';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFf();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
