<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCs;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Czech
 *
 * @psalm-immutable
 */
class LocaleCs extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'czech_ci';
    }

    public function endonym(): string
    {
        return 'čeština';
    }

    public function endonymSortable(): string
    {
        return 'CESTINA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCs();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
