<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguagePl;

/**
 * Polish
 *
 * @psalm-immutable
 */
class LocalePl extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'polish_ci';
    }

    public function endonym(): string
    {
        return 'polski';
    }

    public function endonymSortable(): string
    {
        return 'POLSKI';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePl();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function minimumGroupingDigits(): int
    {
        return 2;
    }
}
